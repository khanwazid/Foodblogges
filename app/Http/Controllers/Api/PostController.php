<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\PostResource;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function store(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'header_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'read_time' => 'required|integer|min:1',
            'categories' => 'required|string|max:255',
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
}
