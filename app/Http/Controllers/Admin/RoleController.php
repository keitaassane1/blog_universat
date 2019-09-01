<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Role;

class RoleController extends Controller {

    public function show(){
        $roles = Role::all();
        return view('backend.admin.roles.roles')->with(compact('roles'));
    }

    public function create_role_view(){
        return view('backend.admin.roles.create_role');
    }

    public function store(RoleRequest $request){
        try{
            Role::create([
                'name' => $request->name,
                'slug' => $request->slug
            ]);
            $request->session()->flash('success', 'Opération effectuée avec succès !');
            return view('backend.admin.roles.roles')->with('roles',Role::all());
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return view('backend.admin.roles.roles')->with('roles',Role::all());
         }
    }

    public function edit($id){
        return view('backend.admin.roles.edit_role')->with('role',Role::find($id));
    }

    public function update(RoleRequest $request){
        try{
            $r = Role::find($request->role_id);
                $r->name = $request->name;
                $r->slug = $request->slug;
            $r->save();
            $request->session()->flash('success', 'Opération effectuée avec succès !');
            return view('backend.admin.roles.roles')->with('roles',Role::all());
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return view('backend.admin.roles.roles')->with('roles',Role::all());
         }
    }

    public function delete(Request $request,$id){
        try{
            $r = Role::find($id);
            $r->delete();
            $request->session()->flash('warning', 'Vous venez de supprimez un role!');
            return redirect()->back();
         }
         catch(\Exception $e){
            $request->session()->flash('danger', 'Error :  '. $e->getMessage());
            return redirect()->back();
         }
    }
}
