<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('posts')->with('posts', $posts);
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $post = new Post($request->all());
        $post->save();
        return redirect()->back();
    }
}
