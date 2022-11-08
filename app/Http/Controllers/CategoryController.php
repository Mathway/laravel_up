<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
        ]);
        //return $request->All();
        return Category::create($request->All());
        /*$req = Request::saved();
        return response()->json($req,201);*/

    }
    public function show(Category $id)
    {
        return $id;
    }
    public function update(Category $post, Request $request)
    {
        $request -> validate([
            'name' => 'required',
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(Category $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
