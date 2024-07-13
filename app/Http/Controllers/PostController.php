<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index',[
            "title" => "Post",
            "posts" => Post::all()
        ]);
    }
    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
