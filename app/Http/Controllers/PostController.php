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
        $tags = Tag::all();
        return view('create', compact('tags'));
    }


    public function save(Request $request){
        request()->validate([
            'title'=> 'required',
            'post_text'=> 'required',

        ]);

        $post = new Post($request->all());
        $post->save();
        $post->tags()->attach($request->tags);
        return redirect()->back();
    }


    public function edit($id){
        $post = Post::findOrfail($id);
        return view('edit')->with('post',$post);
    }

    public function show(Post $post){
        return view('post')->with('post', $post);
    }


    public function update(Request $request, $id){
//        $post->update($request->all());
        $post = Post::findOrfail($id);

        $post->update($request->all());
//        $post->title = $request->title;
//        $post->post_text = $request->post_text;
//        $post->save();

        return redirect()->route('posss.show', $post->id);
    }

    public function delete(Post $post){
        $post->delete();
        return redirect()->back();
    }
}
