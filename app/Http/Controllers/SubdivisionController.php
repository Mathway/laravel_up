<?php

namespace App\Http\Controllers;

use App\Models\Subdivision;
use Illuminate\Http\Request;

class SubdivisionController extends Controller
{
    public function index()
    {
        return Subdivision::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
        //return $request->All();
        return Subdivision::create($request->All());
        /*$req = Request::saved();
        return response()->json($req,201);*/

    }
    public function show(Subdivision $id)
    {
        return $id;
    }
    public function update(Subdivision $post, Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(Subdivision $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
