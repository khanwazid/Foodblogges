<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
/*

    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);
    
        // Find the post using p_id
        $post = Post::where('p_id', $postId)->firstOrFail();
    
        // Create a new comment
        
    
        
    Comment::create([
        'content' => $request->content,
        'user_id' => auth()->id(),
        'post_id' => $post->p_id
    ]);
        
    
        return redirect()->route('show.posts', $post->p_id)
                        ->with('success', 'Comment added successfully!');
    }
    
    public function show(Post $post)
    {
        $comments = $post->comments()->with('user')->latest()->get();
        return view('comments', compact('post', 'comments'));
    }*/
    public function show()
{
    // Fetch all posts, along with their associated comments and users (for displaying usernames)
    $posts = Post::with('comments.user')->latest()->paginate(2);

    return view('comments', compact('posts')); // Pass the posts to the view
}
    public function store(Request $request, $postId)
{
    // Validate the incoming request
    $request->validate([
        'content' => 'required|string|max:500', // Content is required and should not exceed 500 characters
    ]);

    // Find the post using p_id (primary key)
    $post = Post::where('p_id', $postId)->firstOrFail();

    // Create a new comment related to the post
    Comment::create([
        'content' => $request->content,      // The comment content
        'user_id' => auth()->id(),           // The ID of the currently logged-in user
        'post_id' => $post->p_id,            // The post ID to link the comment to
    ]);

    // Redirect back to the post page with a success message
    return redirect()->route('show.posts', $post->p_id)
                     ->with('success', 'Comment added successfully!');

}
/*public function edit(Comment $comment)
{
    // Check if user owns the comment
    if (auth()->id() !== $comment->user_id) {
        return redirect()->back()->with('error', 'Unauthorized action');
    }
    
    return view('comments.edit', compact('comment'));
}*/

public function update(Request $request, Comment $comment)
{
    // Check if user owns the comment
    if (auth()->id() !== $comment->user_id) {
        return redirect()->back()->with('error', 'Unauthorized action');
    }

    $request->validate([
        'content' => 'required|string|max:500'
    ]);

    $comment->update([
        'content' => $request->content
    ]);

    return redirect()->back()->with('success', 'Comment updated successfully');
}

public function destroy(Comment $comment)
{
    // Check if user owns the comment
    if (auth()->id() !== $comment->user_id) {
        return redirect()->back()->with('error', 'Unauthorized action');
    }

    $comment->delete();
    return redirect()->back()->with('success', 'Comment deleted successfully');
}

    

}
