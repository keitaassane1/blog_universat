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

        libxml_use_internal_errors(true);
        $contenu=$request->contenu;
        $dom = new \domdocument();
        $dom->loadHtml($contenu, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path("posts/".Auth::user()->email.'/'.$image_name);
            file_put_contents($path, $data);
            $img->removeattribute('src');
            $img->setattribute('src',env('APP_URL').'/posts/'.Auth::user()->email.'/'.$image_name);
        }

        $contenu = $dom->savehtml();

        try{
            if($request->hasFile('image')){
                $nomimage = \Carbon\Carbon::now()->timestamp.'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path("posts/".Auth::user()->email.'/'), $nomimage);
              }
             Post::create([
                'titre' => $request->titre,
                'description' => $request->description,
                'contenu' => $contenu,
                'categorie_id' => $request->categorie_id,
                'image' => $nomimage,
                'user_id' => Auth::user()->id,
             ]);

             $request->session()->flash('success', 'Opération effectuée avec succès !');
             return redirect()->back();
        }catch(\Exception $e){
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->back();
        }
     }

     public function edit($id){
        $post = Post::find($id);
        return view('backend.auteur.posts.edit_post')->with(compact('post'));
   }


   public function update(PostRequest $request){

    libxml_use_internal_errors(true);
    $contenu=$request->contenu;
    $dom = new \domdocument();
    $dom->loadHtml($contenu, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getelementsbytagname('img');
    foreach($images as $k => $img){
        $data = $img->getattribute('src');
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $image_name= time().$k.'.png';
        $path = public_path("posts/".Auth::user()->email.'/'.$image_name);
        file_put_contents($path, $data);
        $img->removeattribute('src');
        $img->setattribute('src',env('APP_URL').'/posts/'.Auth::user()->email.'/'.$image_name);
    }

    $contenu = $dom->savehtml();

    try{

        if($request->hasFile('image')){
            $nomimage = \Carbon\Carbon::now()->timestamp.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path("posts/".Auth::user()->email.'/'), $nomimage);
          }
          $p = Post::find($request->post_id);
          $p->titre = $request->titre;
          $p->description = $request->description;
          $p->contenu = $contenu;
          $p->categorie_id = $request->categorie_id;
          $p->image = $nomimage;
          $p->save();

         $request->session()->flash('success', 'Opération Update effectuée avec succès !');
         return redirect()->route('auteur.posts');
    }catch(\Exception $e){
        $request->session()->flash('danger', $e->getMessage());
        return redirect()->back();
    }
 }


 public function delete(Request $request,$id){
    try{
        $p = Post::find($id);
        $p->delete();
        $request->session()->flash('warning', 'Vous venez de supprimez un post!');
        return redirect()->route('auteur.posts');
    }
     catch(\Exception $e){
        $request->session()->flash('danger', 'Error :  '. $e->getMessage());
        return redirect()->route('auteur.posts');
     }
}


}


