<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }
    public function store(Post $request)
    {
        $request -> validate([
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'date' => 'required'
        ]);
        return Post::create($request->all());
    }
    public function show(Post $id)
    {
        return $id;
    }
    public function update(Post $post, Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'date' => 'required'
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}

