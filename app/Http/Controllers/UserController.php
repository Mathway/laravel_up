<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);
        //return $request->All();
        return User::create($request->All());
        /*$req = Request::saved();
        return response()->json($req,201);*/

    }
    public function show(User $id)
    {
        return $id;
    }
    public function update(User $post, Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(User $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
