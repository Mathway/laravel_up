<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function index()
    {
        return Notices::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'text' => 'required',
        ]);
        //return $request->All();
        return Notices::create($request->All());
        /*$req = Request::saved();
        return response()->json($req,201);*/

    }
    public function show(Notices $id)
    {
        return $id;
    }
    public function update(Notices $post, Request $request)
    {
        $request -> validate([
            'text' => 'required',
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(Notices $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
