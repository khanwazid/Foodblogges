<?php

namespace App\Http\Controllers;



use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PostController extends Controller
{
   /**
 * Display a list of posts with optional search functionality.
 * 
 * This method retrieves a paginated list of posts, optionally filtered by a search term. 
 * It allows users to search for posts based on the title, description, or the username of the post's author.
 * The posts are ordered by the most recent, and the results are paginated for easy viewing.
 * 
 * @param \Illuminate\Http\Request $request The HTTP request instance containing search parameters.
 * @return \Illuminate\Contracts\View\View The view displaying the list of posts.
 */
    public function index(Request $request)
{
    $query = Post::with('user'); // Eager load the 'user' relationship for posts
    
     // Check if a search term is provided
    if($request->has('search')) {
        $search = $request->get('search');

         // Apply search filters on title, description, and username
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('description', 'like', "%{$search}%")
              ->orWhereHas('user', function($q) use ($search) {
                  $q->where('username', 'like', "%{$search}%");
              });
        });
    }
     // Retrieve the paginated posts, ordered by the latest first
    $posts = $query->latest()->paginate(2);

    // Return the view with the list of posts
    return view('admin.list-posts', compact('posts'));
}

   
    
        /**
 * Display the form to edit a specific post.
 * 
 * This method retrieves the post with the specified ID, along with its associated user data,
 * using eager loading to minimize database queries. If the post is found, it returns the 
 * 'admin.edit-post' view with the post's data, allowing the admin to modify the post.
 * If the post is not found, a 404 error will be thrown automatically by the `findOrFail` method.
 * 
 * @param int $id The ID of the post to be edited.
 * @return \Illuminate\Contracts\View\View The view for editing the post.
 */
        public function edit($id)
        {
            // Retrieve the post with its user using eager loading
            $post = Post::with('user')->findOrFail($id);
            
            // Return the edit view with the post data
            return view('admin.edit-post', compact('post'));
        }
    

        /**
 * Update the specified post in the database.
 * 
 * This method validates the incoming request data for updating a post, including the title, 
 * description, categories, and other relevant fields. It handles image file uploads (if any),
 * ensuring that the existing header image is deleted before a new one is uploaded. The categories 
 * are saved as a JSON-encoded array, and the post is updated with the validated data.
 * 
 * If the update is successful, the user is redirected back to the list of posts with a success 
 * message. If any validation errors occur, the user is redirected back to the form with 
 * the errors highlighted.
 * 
 * @param \Illuminate\Http\Request $request The incoming request containing the updated post data.
 * @param int $id The ID of the post to be updated.
 * @return \Illuminate\Http\RedirectResponse Redirects to the list of posts with a success message.
 */
public function update(Request $request, $id)
{
    try {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories' => 'required|array|min:1|max:5',
            'categories.*' => 'string|in:breakfast,lunch,dinner,desserts,appetizers,beverages,snacks',
            'read_time' => 'required|integer|min:1',
            'cook_time' => 'required|integer|min:1',
            'prep_time' => 'required|integer|min:1',
            'serves' => 'required|integer|min:1',
            'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the post or fail
        $post = Post::where('p_id', $id)->firstOrFail();

        // Handle image upload if present
        if ($request->hasFile('header_pic')) {
            try {
                // Delete old image if exists
                if ($post->header_pic && Storage::exists('public/' . $post->header_pic)) {
                    Storage::delete('public/' . $post->header_pic);
                }

                // Store new image
                $imageName = Str::random(32) . '.' . $request->file('header_pic')->getClientOriginalExtension();
                $request->file('header_pic')->storeAs('public/images', $imageName);
                $validated['header_pic'] = 'images/' . $imageName;
            } catch (\Exception $e) {
                throw new \Exception('Failed to process image: ' . $e->getMessage());
            }
        }

        // Encode categories
        $validated['categories'] = json_encode($request->categories);

        // Update post
        $post->update($validated);

        return redirect()
            ->route('list.post')
            ->with('success', 'Recipe updated successfully.');

    } catch (\Illuminate\Validation\ValidationException $e) {
        return redirect()
            ->back()
            ->withErrors($e->errors())
            ->withInput();
            
    } catch (ModelNotFoundException $e) {
        return redirect()
            ->back()
            ->with('error', 'Recipe not found.')
            ->withInput();
            
    } catch (\Exception $e) {
        return redirect()
            ->back()
            ->with('error', 'Failed to update recipe: ' . $e->getMessage())
            ->withInput();
    }
}



/**
 * Delete the specified post from the database.
 * 
 * This method handles the deletion of a post by first checking if an associated header image
 * exists. If the image exists, it is deleted from the storage directory. Afterward, the post 
 * record is deleted from the database. Finally, the user is redirected back to the list of posts 
 * with a success message indicating that the post has been successfully deleted.
 * 
 * @param int $id The ID of the post to be deleted.
 * @return \Illuminate\Http\RedirectResponse Redirects to the list of posts with a success message.
 */
        public function destroy($id)
        {
            // Find the post by its ID, throwing a 404 exception if not found
            $post = Post::findOrFail($id);
    
            // Check if there's an associated header image and delete it from storage
            if ($post->header_pic && Storage::exists('public/' . $post->header_pic)) {
                   // Delete the image from storage
                Storage::delete('public/' . $post->header_pic);
            }
    
           // Delete the post record from the database
            $post->delete();
    
       
         // Redirect back to the list of posts with a success message
            return redirect()->route('list.post')->with('success', 'Post deleted successfully.');
        }

     /**
 * Display the form to create a new post.
 * 
 * This method checks if the authenticated user has the 'admin' role. If so,  
 * Afterward, it returns the 'post-create' view for the admin to create a new post.
 * 
 * @return \Illuminate\Contracts\View\View The view for creating a new post.
 */  
    public function creates()
{  
     // Check if the authenticated user is an admin
    if (auth()->user()->role === 'admin') {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.post-create', compact('users'));
    }
    return redirect()->route('login.show')->with('error', 'Unauthorized access');
}

/**
 * Store a newly created post in the database.
 * 
 * This method validates the incoming request, including the post data and the optional header image. 
 * If the image is provided, it stores the image in the 'public/images' directory with a unique name 
 * to avoid conflicts. It then creates a new post in the database and redirects the user to the admin 
 * dashboard with a success message.
 * 
 * @param \Illuminate\Http\Request $request The request object containing the post data.
 * @return \Illuminate\Http\RedirectResponse Redirects to the admin dashboard with a success message.
 */
public function stores(Request $request)
{
    try {
        // Merge the user_id field with the authenticated user's ID
        $request->merge(['user_id' => auth()->id()]);

        // Validate the incoming request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array|min:1|max:5',
            'categories.*' => 'string|in:breakfast,lunch,dinner,desserts,appetizers,beverages,snacks',
            'prep_time' => 'required|integer',
            'cook_time' => 'required|integer',
            'read_time' => 'required|integer',
            'serves' => 'required|integer',
        ]);

        // Handle image upload if present
        if ($request->hasFile('header_pic')) {
            try {
                // Generate a custom, unique file name
                $imageName = Str::random(32) . '.' . $request->file('header_pic')->getClientOriginalExtension();
                
                // Store the image
                $path = $request->file('header_pic')->storeAs('public/images', $imageName);
                
                // Update validated data with image path
                $validated['header_pic'] = 'images/' . $imageName;
            } catch (\Exception $e) {
                throw new \Exception('Failed to upload image: ' . $e->getMessage());
            }
        }

        // Create the post
        Post::create($validated);

        return redirect()
            ->route('list.post')
            ->with('success', 'Recipe created successfully.');

    } catch (ValidationException $e) {
        return redirect()
            ->back()
            ->withErrors($e->errors())
            ->withInput();
            
    } catch (Exception $e) {
        return redirect()
            ->back()
            ->with('error', 'Failed to create recipe: ' . $e->getMessage())
            ->withInput();
    }
}

    }

   


