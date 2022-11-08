<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;


class RequestController extends Controller
{
    public function index()
    {
        return Ticket::all();
    }
    public function store(Request $request)
    {
        //return $request->All();

        /*$req = Request::saved();
        return response()->json($req,201);*/
        $request -> validate([
           'user_id' => 'required',
           'title_request' => 'required',
           'text_request' => 'required',
            'subdivision_id' => 'required',
            "category_id" => 'required',
            "date_request" => 'required'

        ]);
        return Ticket::create($request->All());
    }
    public function show(Ticket $id)
    {
        return $id;
    }
    public function update(Ticket $post, Request $request)
    {
        $post->update($request->all());
        $request -> validate([
            'user_id' => 'required',
            'title_request' => 'required',
            'text_request' => 'required',
            'subdivision_id' => 'required',
            "category_id" => 'required',
            "date_request" => 'required'

        ]);
        return $post;
    }
    public function destroy(Ticket $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
