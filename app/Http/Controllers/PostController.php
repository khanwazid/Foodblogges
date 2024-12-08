<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function create()
    {
        // Return the form for creating a post
        return view('create');
       // return 'This is a test response from create method';
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'read_time' => 'required|integer',
            'categories' => 'required|string',
            'cook_time' => 'required|integer',
            'prep_time' => 'required|integer',
            'serves' => 'required|integer',
        ]);

        // Handle file upload if there's an image
        if ($request->hasFile('header_pic')) {
            $imagePath = $request->file('header_pic')->store('images', 'public');
               // Store the file path in the session for re-use
        session(['header_pic_path' => $imagePath]);
        } else {
            // Use the previously saved file path if validation fails
        $imagePath = session('header_pic_path', null);
        }

        // Store the post
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'header_pic' => $imagePath,
            'read_time' => $request->read_time,
            'categories' => $request->categories,
            'cook_time' => $request->cook_time,
            'prep_time' => $request->prep_time,
            'serves' => $request->serves,
            'user_id' => Auth::id(),  // Use the logged-in user's ID
        ]);
        session()->forget('header_pic_path');

        // Redirect with success message
        return redirect()->route('profile')->with('success', 'Post created successfully!');
    }
   /* public function index()
    {
        // Fetch all posts
        //$posts = Post::all(); // Alternatively, you can use pagination if you want to limit the number of posts per page
        $posts = Post::with('user')->paginate(10);
        return view('admin.list-posts', compact('posts'));
      
    }*/
    public function index(Request $request)
{
    $query = Post::with('user');
    
    if($request->has('search')) {
        $search = $request->get('search');
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('description', 'like', "%{$search}%")
              ->orWhereHas('user', function($q) use ($search) {
                  $q->where('username', 'like', "%{$search}%");
              });
        });
    }
    
    $posts = $query->latest()->paginate(2);
    return view('admin.list-posts', compact('posts'));
}


    public function show($id)
    {
        // Retrieve the post using the provided ID
      //  $post = Post::findOrFail($id);
        $post = Post::with('user')->findOrFail($id);

        // Retrieve the user related to the post (assuming the post has a user relationship)
        $user = User::findOrFail($post->user_id);

        // Return the view and pass the post and user data
        return view('admin.posts-show', compact('post', 'user'));
    }
    
        
        public function edit($id)
        {
            // Retrieve the post with its user using eager loading
            $post = Post::with('user')->findOrFail($id);
            
            // Return the edit view with the post data
            return view('admin.edit-post', compact('post'));
        }
    
        // Update post method
       /*public function update(Request $request, $id)
        {
            // Validate the input data
            $request->validate([
                'username' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'categories' => 'required|string',
                'read_time' => 'required|integer|min:1',
                'cook_time' => 'required|integer|min:1',
                'prep_time' => 'required|integer|min:1',
                'serves' => 'required|integer|min:1',
                'header_pic' => 'nullable|image|max:2048',  // Optional header image, but it must be an image if provided
            ]);
    
            // Find the post to update
            $post = Post::findOrFail($id);
    
            // Update the post details
            $post->title = $request->title;
            $post->description = $request->description;
            $post->categories = $request->categories;
            $post->read_time = $request->read_time;
            $post->cook_time = $request->cook_time;
            $post->prep_time = $request->prep_time;
            $post->serves = $request->serves;
    
            // If a new header image is uploaded, handle it
            if ($request->hasFile('header_pic')) {
                // Delete the old image if exists
                if ($post->header_pic && \Storage::exists('public/' . $post->header_pic)) {
                    \Storage::delete('public/' . $post->header_pic);
                }
    
                // Store the new image
                $post->header_pic = $request->file('header_pic')->store('images', 'public');
            }
    
            // Save the post changes
            $post->save();
    
         
           // $post->user->username = $request->username;
           // $post->user->save();
    
            // Redirect back with success message
            return redirect()->route('list.post', $post->p_id)->with('success', 'Post updated successfully.');
        }*/
       /* public function update(Request $request, $p_id)
{
    // Validate the input data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'categories' => 'required|string',
        'read_time' => 'required|integer|min:1',
        'cook_time' => 'required|integer|min:1',
        'prep_time' => 'required|integer|min:1',
        'serves' => 'required|integer|min:1',
        'header_pic' => 'nullable|image|max:2048',
    ]);

    // Find the post using p_id
    $post = Post::where('p_id', $p_id)->firstOrFail();

    // Update the post details
    $post->update([
        'title' => $request->title,
        'description' => $request->description,
        'categories' => $request->categories,
        'read_time' => $request->read_time,
        'cook_time' => $request->cook_time,
        'prep_time' => $request->prep_time,
        'serves' => $request->serves,
    ]);

    // Handle image upload if present
    if ($request->hasFile('header_pic')) {
        // Delete old image
        if ($post->header_pic) {
            Storage::disk('public')->delete($post->header_pic);
        }
        
        // Store new image
        $post->header_pic = $request->file('header_pic')->store('images', 'public');
        $post->save();
    }

    return redirect()->route('list.post')->with('success', 'Recipe updated successfully!');
}*/
public function update(Request $request, $id)
{
    // Validate the input data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'categories' => 'required|string',
        'read_time' => 'required|integer|min:1',
        'cook_time' => 'required|integer|min:1',
        'prep_time' => 'required|integer|min:1',
        'serves' => 'required|integer|min:1',
        'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the post using p_id
    $post = Post::where('p_id', $id)->firstOrFail();

    // If an image is uploaded, handle it the same way as in stores method
    if ($request->hasFile('header_pic')) {
        // Delete old image if it exists
      /*  if ($post->header_pic) {
            Storage::delete('public/' . $post->header_pic);
        }  */
        if ($post->header_pic && Storage::exists('public/' . $post->header_pic)) {
            Storage::delete('public/' . $post->header_pic);
        }
        // Generate custom name and store new image
        $imageName = Str::random(32) . '.' . $request->file('header_pic')->getClientOriginalExtension();
        $request->file('header_pic')->storeAs('public/images', $imageName);
        $validated['header_pic'] = 'images/' . $imageName;
    }

    // Updateing the post with validated data
    $post->update($validated);

    return redirect()->route('list.post')->with('success', 'Recipe updated successfully.');
}


        public function destroy($id)
        {
            // Find the post to delete
            $post = Post::findOrFail($id);
    
            // Check if there's an associated header image and delete it from storage
            if ($post->header_pic && Storage::exists('public/' . $post->header_pic)) {
                Storage::delete('public/' . $post->header_pic);
            }
    
            // Delete the post record
            $post->delete();
    
            // Redirect to the index or profile page with a success message
            return redirect()->route('list.post')->with('success', 'Post deleted successfully.');
        }

        public function creates()
    {
        // Getting all users excluding the admins
        $users = User::where('role', '!=', 'admin')->get();
        
        return view('admin.post-create', compact('users'));
    }
    public function stores(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'nullable|string',
            'prep_time' => 'required|integer',
            'cook_time' => 'required|integer',
            'read_time' => 'nullable|integer',
            'serves' => 'required|integer',
        ]);

        // If an image is uploaded, store it
       //  if ($request->hasFile('header_pic')) {
           // $path = $request->file('header_pic')->store('public/images');
            //$validated['header_pic'] = basename($path);
            
       // } 
        // If an image is uploaded, store it with a custom name
    if ($request->hasFile('header_pic')) {
        // Generate a custom, unique file name using a random string and the file's original extension
        $imageName = Str::random(32) . '.' . $request->file('header_pic')->getClientOriginalExtension();

        // Store the image in the 'public/images' directory with the custom name
        $path = $request->file('header_pic')->storeAs('public/images', $imageName);

        // Store only the relative image path in the database (i.e., 'images/{custom_name}.jpg')
        $validated['header_pic'] = 'images/' . $imageName;
    }

        // Create the post
        Post::create($validated);



        return redirect()->route('list.post')->with('success', 'Recipe created successfully.');
    }
    }

   


