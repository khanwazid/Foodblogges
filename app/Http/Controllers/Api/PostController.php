<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

}
