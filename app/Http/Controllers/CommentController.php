<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
 
    /**
 * Display a list of posts with pagination and a message if no posts are available.
 * 
 * This method retrieves the latest posts from the database, paginated with 1 post per page. It also checks 
 * if there are no posts available and passes an appropriate message to the view to inform the user. 
 * The posts are displayed in the `comments` view, and if no posts are found, a message is displayed instead.
 * 
 * @return \Illuminate\View\View Returns the `comments` view displaying the list of posts with pagination.
 */
public function show()
{
    
    // Retrieve the latest posts, paginated with 1 post per page
    $posts = Post::latest()->paginate(1);

    // Return the view with the posts data and a message if no posts are found
    return view('comments', [
        'posts' => $posts,
         // Display a message if no posts are available
       'message' => $posts->isEmpty() ? 'No posts available.' : null,
    ]);
}

/**
 * Store a new comment for a specified post.
 * 
 * This method handles the creation of a comment for a specific post identified by its `p_id` (primary key). 
 * It validates the incoming request, ensuring the content does not exceed 500 characters. If the post already 
 * has a comment, it prevents the creation of another comment, optionally allowing you to update the existing 
 * comment. If no comment exists, a new comment is created and associated with the post and the currently logged-in user.
 * 
 * @param \Illuminate\Http\Request $request The incoming request containing the comment data.
 * @param int $postId The ID of the post the comment is being added to.
 * @return \Illuminate\Http\RedirectResponse Redirects back to the post page with a success or error message.
 */
public function store(Request $request, $postId)
{
    // Validate the incoming request
    $request->validate([
        'content' => 'required|string|max:500', // Content is required and should not exceed 500 characters
    ]);

    // Find the post using p_id (primary key)
    $post = Post::where('p_id', $postId)->firstOrFail();

    // Check if the post already has a comment
    $existingComment = Comment::where('post_id', $post->p_id)->first();

    if ($existingComment) {
        // Optionally update the existing comment or show a message if only one comment is allowed
        return redirect()->back()->with('error', 'This post already has a comment.');
    }

    // Create a new comment related to the post
    Comment::create([
        'content' => $request->content,      // The comment content
        'user_id' => auth()->id(),           // The ID of the currently logged-in user
        'post_id' => $post->p_id,            // The post ID to link the comment to
    ]);

    // Redirect back to the post page with a success message
    return redirect()->back()->with('success', 'Comment added successfully!');
}

/**
 * Update an existing comment for a specific post.
 * 
 * This method allows the logged-in user to update their own comment for a specific post. 
 * It checks if the user is the owner of the comment, ensuring they can only update their own comments. 
 * Additionally, it verifies that the post does not already have another comment (excluding the current one) 
 * before allowing the update. The content is validated to ensure it meets the required criteria. 
 * If successful, the comment is updated and a success message is returned; otherwise, an error message is displayed.
 * 
 * @param \Illuminate\Http\Request $request The incoming request containing the updated comment content.
 * @param \App\Models\Comment $comment The comment being updated.
 * @return \Illuminate\Http\RedirectResponse Redirects back to the post page with a success or error message.
 */
public function update(Request $request, Comment $comment)
{
    // Check if user owns the comment
    if (auth()->id() !== $comment->user_id) {
        return redirect()->back()->with('error', 'Unauthorized action');
    }

    // Check if the post already has another comment (excluding the current one being updated)
    $existingComment = Comment::where('post_id', $comment->post_id)
                                ->where('id', '!=', $comment->id)
                                ->first();

   // If a comment already exists for the post, return an error
    if ($existingComment) {
        return redirect()->back()->with('error', 'This post already has a comment.');
    }

    // Validate the updated content of the comment
    $request->validate([
        'content' => 'required|string|max:500'
    ]);

   // Update the comment with the new content
    $comment->update([
        'content' => $request->content
    ]);

     // Redirect back with a success message after updating the comment
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
