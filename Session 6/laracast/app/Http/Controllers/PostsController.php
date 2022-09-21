<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PostsController extends Controller
{
    public function index() {
        // $user = User::find(1);
        // dd($user->email . " " . $user->password);


        return view('posts.index')->with("posts", []);
    }

    public function create() {
        return view("posts.create");
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
