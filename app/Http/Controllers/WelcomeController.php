<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function read_post(Request $request, $id){
        $post =  Post::find($id);
        return view('frontend.read_post')->with(compact('post'));
    }
}
