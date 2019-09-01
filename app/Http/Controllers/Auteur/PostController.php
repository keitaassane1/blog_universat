<?php

namespace App\Http\Controllers\Auteur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function show(){
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('backend.auteur.posts.posts')->with(compact('posts'));
     }

     public function create_post(){
        return view('backend.auteur.posts.create_post');
    }

     public function store(PostRequest $request){
        try{
             Post::create([
                'titre' => $request->titre,
                'description' => $request->description,
                'contenu' => $request->contenu,
                'categorie_id' => $request->categorie_id,
                'image' => $request->image,
                'user_id' => Auth::user()->id,
             ]);
             if($request->hasFile('image')){
                $nomimage = "posts_".\Carbon\Carbon::now()->timestamp.'_'.$request->file('image')->getClientOriginalName();
                $request->file("image")->move("posts/".Auth::user()->email.'/',$nomimage);
              }
             $request->session()->flash('success', 'Opération effectuée avec succès !');
             return redirect()->back();
        }catch(\Exception $e){
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->back();
        }
     }
}


