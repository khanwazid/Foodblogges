<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class PostController extends Controller
{
    public function store(Request $request)
{
     // First validate the user role
     if ($request->user()->role !== 'admin') {
        // Add more descriptive message for non-admin users
        return response()->json([
            'success' => false,
            'message' => 'Only administrators can create new posts. Please contact an administrator for assistance.',
            'role' => $request->user()->role
        ], 403);}
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'read_time' => 'required|integer|min:1',
           // 'categories' => 'required|string|max:255',
            'categories' => 'required|array|min:1|max:5',
            'categories.*' => 'string|in:breakfast,lunch,dinner,desserts,appetizers,beverages,snacks',
            'cook_time' => 'required|integer|min:1',
            'prep_time' => 'required|integer|min:1',
            'serves' => 'required|integer|min:1',
        ]);

        // Add the logged-in user's ID
        $validatedData['user_id'] = $request->user()->id;

        // Handle the file upload if `header_pic` is provided
        if ($request->hasFile('header_pic')) {
            $validatedData['header_pic'] = $request->file('header_pic')->store('images', 'public');
            //$validated['header_pic'] = $request->file('header_pic')->store('images', 'public');
        }

        // Create the post
        $post = Post::create($validatedData);

        // Return the newly created post using a resource
        return response()->json([
            'success' => true,
            'data' => new PostResource($post),
            'message' => 'Post created successfully',
        ], 201);
    } catch (\Throwable $e) {
        // Handle errors and return a response
        return response()->json([
            'success' => false,
            'message' => 'Failed to create the post',
            'error' => $e->getMessage(),
        ], 500);
    }
}

public function update(Request $request, $id)
{
    // Validate user role
    if ($request->user()->role !== 'admin') {
        return response()->json([
            'success' => false,
            'message' => 'Only administrators can update posts. Please contact an administrator for assistance.',
            'role' => $request->user()->role
        ], 403);
    }

    try {
        // Find the post
       // $post = Post::where('p_id', $p_id)->firstOrFail();
        $post = Post::where('p_id', $id)->firstOrFail();

        // Validate the incoming request data
        $validatedData = $request->validate([

            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'read_time' => 'required|integer|min:1',
            //'categories' => 'required|string|max:255',
            'categories' => 'required|array|min:1|max:5',
            'categories.*' => 'string|in:breakfast,lunch,dinner,desserts,appetizers,beverages,snacks',
            'cook_time' => 'required|integer|min:1',
            'prep_time' => 'required|integer|min:1',
            'serves' => 'required|integer|min:1',
        ]);

        // Handle the file upload if header_pic is provided
        if ($request->hasFile('header_pic')) {
            // Delete old image if exists
            if ($post->header_pic) {
                Storage::disk('public')->delete($post->header_pic);
            }
            $validatedData['header_pic'] = $request->file('header_pic')->store('images', 'public');
        }

        // Update the post
        $post->update($validatedData);

        // Return the updated post
        return response()->json([
            'success' => true,
            'data' => new PostResource($post),
            'message' => 'Post updated successfully',
        ], 200);

    } catch (ModelNotFoundException $e) {
        return response()->json([
            'success' => false,
            'message' => 'Post not found',
        ], 404);
    } catch (\Throwable $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to update the post',
            'error' => $e->getMessage(),
        ], 500);
    }
}
public function getUserPosts(Request $request)
{
    try {
        // Get the posts of the logged-in user
        $posts = Post::where('user_id', $request->user()->id)->get();

        // Check if posts exist for the user
        if ($posts->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No posts found for the logged-in user.',
            ], 404);
        }

        // Return the posts as a resource collection
        return response()->json([
            'success' => true,
            'data' => PostResource::collection($posts),
            'message' => 'Posts retrieved successfully.',
        ], 200);
    } catch (\Throwable $e) {
        // Handle any errors and return a response
        return response()->json([
            'success' => false,
            'message' => 'Failed to retrieve posts.',
            'error' => $e->getMessage(),
        ], 500);
    }
}


public function delete(Request $request, $id)
    { 

        try {
            // Getting the authenticated user
            $user = $request->user();

            // Finding the post by ID
            $post = Post::where('p_id', $id)->firstOrFail();

            // Checking if the post belongs to the authenticated user
            if ($post->user_id !== $user->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'You can only delete your own posts.',
                ], 403);
            }

            // Deleting the header image if exists
            if ($post->header_pic) {
                Storage::disk('public')->delete($post->header_pic);
            }

            // Deleting the post
            $post->delete();

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Post deleted successfully.',
            ], 200);

        } catch (ModelNotFoundException $e) {
            // Post not found
            return response()->json([
                'success' => false,
                'message' => 'Post not found.',
            ], 404);
        } catch (\Throwable $e) {
            // Handle other errors
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the post.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

   
public function getAdminPosts(Request $request)
{
    try {
        // Fetch posts where the user_id belongs to an admin
        $adminPosts = Post::whereHas('user', function ($query) {
            $query->where('role', 'admin'); // Assuming 'role' column indicates user roles
        })->get();

        // Return successful response
        return response()->json([
            'success' => true,
            'posts' => $adminPosts,
              'message' => 'Posts retrieved successfully'
        ], 200);

    } catch (\Exception $e) {
        // Log the error for debugging
        Log::error('Error fetching admin posts: ' . $e->getMessage());

        // Return error response
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while fetching posts. Please try again later.',
        ], 500);
    }

}

public function stores(Request $request)
{
 
    try {

        $existingComment = Comment::where('post_id', $request->post_id)
                                ->first();

        if ($existingComment) {
            return response()->json([
                'status' => 'error',
                'message' => 'This post already has a comment'
            ], 403);
        }

        $post = Post::findOrFail($request->post_id);


        $validated = $request->validate([
            'content' => 'required|string|min:2|max:500',
            'post_id' => 'required|exists:posts,p_id'
        ]);

        $comment = Comment::create([
            'content' => $validated['content'],
            'post_id' => $validated['post_id'],
            'user_id' => auth()->id()
        ]);
     

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $comment->id,
                'content' => $comment->content,
                'user_name' => $comment->user->username,
                'created_at' => $comment->created_at->format('Y-m-d H:i:s')
            ],
            'message' => 'Comment added successfully'
        ], 201);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
    Log::error('Error adding comment: ' . $e->getMessage());
    return response()->json([
        'status' => 'error',
        'message' => 'Failed to add comment',
        'debug' => $e->getMessage() // Remove in production
    ], 500);
}

}

public function updateComment(Request $request, $id)
{
    try {
        $comment = Comment::findOrFail($id);
        
        // Check if user owns the comment
        if ($comment->user_id !== auth()->id()) {
            return response()->json([
                'status' => 'error',
                'message' => 'You can only edit your own comments'
            ], 403);
        }

        // Check if another comment exists for this post
        $existingComment = Comment::where('post_id', $comment->post_id)
                                ->where('id', '!=', $id)
                                ->first();

        if ($existingComment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Only one comment is allowed per post'
            ], 403);
        }

        $validated = $request->validate([
            'content' => 'required|string|min:2|max:500'
        ]);

        $comment->update([
            'content' => $validated['content']
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $comment->id,
                'content' => $comment->content,
                'user_name' => $comment->user->username,
                'created_at' => $comment->created_at->format('Y-m-d H:i:s'),
                'updated_at' => $comment->updated_at->format('Y-m-d H:i:s')
            ],
            'message' => 'Comment updated successfully'
        ], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        Log::error('Error updating comment: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to update comment',
            'debug' => $e->getMessage()
        ], 500);
    }
}

  public function index(Request $request)
  {
      try {
          $comments = Comment::with(['user', 'post'])
              ->latest()
              ->paginate(10);

          return response()->json([
              'status' => 'success',
              'data' => [
                  'comments' => $comments->map(function ($comment) {
                      return [
                          'id' => $comment->id,
                          'content' => $comment->content,
                          'user_name' => $comment->user->username,
                          'post_title' => $comment->post->title,
                          'post_id' => $comment->post_id,
                          'created_at' => $comment->created_at->format('Y-m-d H:i:s')
                      ];
                  }),
                  'pagination' => [
                      'total' => $comments->total(),
                      'per_page' => $comments->perPage(),
                      'current_page' => $comments->currentPage(),
                      'last_page' => $comments->lastPage()
                  ]
              ],
              'message' => 'Comments retrieved successfully'
          ], 200);

      } catch (\Exception $e) {
          return response()->json([
              'status' => 'error',
              'message' => 'Failed to retrieve comments',
              'debug' => $e->getMessage()
          ], 500);
      }
  }

  public function storeComment(Request $request)
  {
      try {
          $validator = Validator::make($request->all(), [
              'full_name' => 'required|string|max:255',
              'email' => 'required|email|max:255',
              'website' => 'nullable|url|max:255',
              'message' => 'required|string'
          ]);

          if ($validator->fails()) {
              return response()->json([
                  'status' => false,
                  'errors' => $validator->errors()
              ], 422);
          }

          $contact = Contact::create([
              'user_id' => auth()->id(),
              'full_name' => $request->full_name,
              'email' => $request->email,
              'website' => $request->website,
              'message' => $request->message
          ]);

          return response()->json([
              'status' => true,
              'message' => 'Contact created successfully',
              'data' => $contact
          ], 201);

      } catch (Exception $e) {
          return response()->json([
              'status' => false,
              'message' => 'Something went wrong!',
              'error' => $e->getMessage()
          ], 500);
      }
  }


  public function indexContact(Request $request)
  {
      try {
         
        $contacts = Contact::latest()
        ->paginate(10);

          return response()->json([
              'status' => true,
              'message' => 'Contacts retrieved successfully',
              'data' => [
                  'contacts' => $contacts->items(),
                  'pagination' => [
                      'total' => $contacts->total(),
                      'per_page' => $contacts->perPage(),
                      'current_page' => $contacts->currentPage(),
                      'last_page' => $contacts->lastPage()
                  ]
              ]
          ], 200);

      } catch (Exception $e) {
          return response()->json([
              'status' => false,
              'message' => 'Failed to retrieve contacts',
              'error' => $e->getMessage()
          ], 500);
      }
  }

  public function show($id)
  {
      try {
          $contact = Contact::findOrFail($id);

          return response()->json([
              'status' => true,
              'message' => 'Contact details retrieved successfully',
              'data' => $contact
          ], 200);

      } catch (Exception $e) {
          return response()->json([
              'status' => false,
              'message' => 'Contact not found',
              'error' => $e->getMessage()
          ], 404);
      }
  }
}
