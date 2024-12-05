<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin');  
    }
   /* public function show()
{
    // Fetch all posts, along with their associated comments and users (for displaying usernames)
    $posts = Post::with('comments.user')->latest()->paginate(2);

    return view('comments', compact('posts')); // Pass the posts to the view
}*/

     public function shown()
     {
         //$comments = Comment::with(['user', 'post'])->latest()->paginate(10);
         $posts = Post::with('comments.user')->latest()->paginate(2);
         return view('admin.comment-management', compact('posts'));
     }
 

     public function update(Request $request, Comment $comment)
     {
         $validated = $request->validate([
             'content' => 'required|min:3|max:1000'
         ]);
 
         $comment->update($validated);
         return redirect()->back()->with('success', 'Comment updated successfully');
     }
 
     public function destroy(Comment $comment)
     {
         $comment->delete();
         return redirect()->back()->with('success', 'Comment deleted successfully');
     }
}
