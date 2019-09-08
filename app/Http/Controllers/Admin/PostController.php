<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function show(){
        $posts = Post::all();
        return view('backend.admin.posts.posts')->with(compact('posts'));
     }

    public function update_status_post(Request $request,$id){
        try{
            $p = Post::find($id);

            if($p->status == 1) {
                $p->status = 0;
            }elseif($p->status == 0){
                $p->status = 1;
            }

            $p->save();

            $request->session()->flash('success', 'Opération effectuée avec succés!');
            return redirect()->back();
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return redirect()->back();
         }
    }

}
