<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    public function index()
    { 
        $comments=Comment::all();
        
        if ($comments == null) {
            return response()->jason([
             "massege"=>"comments Not Found ",404
            ]);
         }
        return[CommentResource::collection($comments)];

    }

    public function store(Request $request , Post $post_id)
    {
       // Find the post by ID

       $post = Post::find($post_id);

        // If the post does not found, return a 404 response
        if (!$post) {
            return response()->json([
                'error' => 'Post not found',
            ], 404);
        }

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'content' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }

        // Create a new comment using the validated data
        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => $request->user_id,
            'post_id' => $post->id,
        ]);

        // Return a success response with the created comment data
        return response()->json([
            'message' => 'Comment created successfully',
            'comment' => $comment,
        ], 201);
    }
}
