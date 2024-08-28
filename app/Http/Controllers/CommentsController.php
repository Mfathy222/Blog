<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CommentAdded;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{

    public function store(Request $request, Post $post)
    {

        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',
        ]);
        // Ensure the Comment model
        $comment = new Comment(); 
        // Assign the 'content' field
        $comment->content = $validatedData['content'];  // Assign the 'content' field
        // Assign the current authenticated user's ID
        $comment->user_id = auth()->id();  
        // Assign the post's ID
        $comment->post_id = $post->id;  
        // Save the comment to the database
        $comment->save();
        // send email
        Mail::to($post->user->email)->send(new CommentAdded($comment,$post));
        //redirect to index
        return redirect(url('/'));

    }
}
