<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
 * Display the admin dashboard view.
 * 
 * This method handles the display of the admin dashboard page. It doesn't require any data to be passed 
 * from the controller to the view as it's a basic view rendering. It simply returns the 'admin' view, which 
 * typically serves as the main page for admin-related tasks and navigation.
 * 
 * @return \Illuminate\View\View Returns the admin dashboard view.
 */
    public function index()
    {
        
        return view('admin');  
    }
  

    /**
 * Display a paginated list of posts along with their comments and associated users.
 * 
 * This method retrieves the latest posts with their related comments and the users who made those comments. 
 * It uses eager loading to minimize database queries by fetching the comments and user data at the same time 
 * as the posts. The posts are paginated to display only a limited number per page (1 post per page in this case). 
 * The method then returns the 'admin.comment-management' view, passing the posts data to be displayed.
 * 
 * @return \Illuminate\View\View Returns the 'admin.comment-management' view with the posts and comments data.
 */
     public function shown()
     {
         
         $posts = Post::with('comments.user')->latest()->paginate(1);
         return view('admin.comment-management', compact('posts'));
     }
 

  /* 
public function update(Request $request, Comment $comment)
{
    // Only admin can edit any comment
    if (auth()->user()->role === 'admin') {
        $validated = $request->validate([
            'content' => 'required|min:3|max:1000'
        ]);

        $comment->update($validated);
        return redirect()->back()->with('success', 'Comment updated successfully');
    }
    
    abort(403);
}

public function destroy(Comment $comment)
{
    // Only admin can delete any comment
    if (auth()->user()->role === 'admin') {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
    
    abort(403);
}*/

}
