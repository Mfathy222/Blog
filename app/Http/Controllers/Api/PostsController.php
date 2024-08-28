<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{


    // Auth
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('index');
    }
    public function index()
    {
        $posts = Post::all();

        if ($posts == null) {
            return response()->jason([
                "massege" => "Posts Not Found",
                404
            ]);
        }

        return [PostResource::collection($posts)];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 422);
        }
        //Auth
        $user = $request->user();
        if (!$user->tokenCan('posts.create')) {
            abort(403, 'Not allowed');
        }
        // Create a new post using the validated data
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id,
        ]);

        // Return a success response with the created post data
        return response()->json([
            'message' => 'Post created successfully',

        ], 201);
    }

    public function update(Request $request, string $id)
    {
        // Find the post by ID
        $post = Post::find($id);

        // If the post does not exist, return a 404 response
        if (!$post) {
            return response()->json([
                'message' => 'Post not found',
            ], 404);
        }

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
            ], 422);
        }

        //Auth
        $user = $request->user();
        if (!$user->tokenCan('posts.update')) {
            abort(403, 'Not allowed');
        }


        // Update the post with the validated data
        $post->update($validator->validated());

        // Return a success response with the updated post data
        return response()->json([
            'message' => 'Post updated successfully',
            
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        // Find the post by ID
        $post = Post::find($id);
        // If the post does not exist, return a 404 response
        if (!$post) {
            return response()->json([
                'message' => 'Post not found',
            ], 404);
        }
    //Auth
        $user = Auth::guard('sanctum')->user();
        if (!$user->tokenCan('post.delete')) {
            return response([
                'message' => 'Not allowed'
            ], 403);
        }


        // Delete the post
        $post->delete();

        // Return a success response
        return response()->json([
            'message' => 'Post deleted successfully',
        ], 200);
    }
}
