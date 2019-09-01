<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show(){
       $posts = Post::where('user_id', Auth::user()->id)->get();
       return $posts;
    }
}
