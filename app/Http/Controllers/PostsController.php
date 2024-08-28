<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

      return view('index',compact('posts'));
       
    }

    
    public function create()
    {
        $posts=Post::all();
        return view("posts.create", compact('posts'));
    }


    public function store(Request $request)
    {
        $post= request()->validate([
            'title'=>'required',
            'content' => 'required|min:3|max:240'
        ]);

        $post= Post::create([
            'title'=>request()->input('title'),
            'content'=>request()->input('content'),
            'user_id'=>auth()->user()->id
        ]);

     
        return redirect(url('/'));

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.edit',["post"=>$post]);
    }


    public function update(Request $request,$id)
    {
       $data= request()->validate([
            'title'=>'required',
            'content' => 'required|min:3|max:240',
            'comments'=>'required|min:3|max:240'
        ]);
        $post=Post::findOrFail($id);
        $post->update($data);
        return redirect(url('/'));

    }


    public function delete($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();

       return redirect(url('/'));
    }
}
