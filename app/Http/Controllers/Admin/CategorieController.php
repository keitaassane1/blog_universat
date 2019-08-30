<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function show(){
        $categories = Categorie::all();
        ////+++return view('backend.admin.categories.categories')->with('categories',$categories);
        ////+++return view('backend.admin.categories.categories')->with(['categories' => $categories]);
        return view('backend.admin.categories.categories')->with(compact('categories'));
    }

    public function showFormCreate(){
        return view('backend.admin.categories.create_ategorie');

    }

    public function create(CategorieRequest $request){
        try{
            Categorie::create([
                'name' => $request->name,
                'description' => $request->description
            ]);
            $request->session()->flash('success', 'Opération effectuée avec succès !');
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
    }

    public function edit($id){
        return view('backend.admin.categories.edit_categorie')->with('categorie',Categorie::find($id));
    }

    public function update(CategorieRequest $request){
        try{
            $c = Categorie::find($request->categorie_id);
            $c->name = $request->name;
            $c->description = $request->description;
            $c->save();

            $request->session()->flash('success', 'Opération effectuée avec succès !');
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
    }

    public function delete(Request $request,$id){
        try{
            $c = Categorie::find($id);
            $c->delete();
            $request->session()->flash('warning', 'Vous venez de supprimez une catégorie!');
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return view('backend.admin.categories.categories')->with('categories',Categorie::all());
         }
    }
}
