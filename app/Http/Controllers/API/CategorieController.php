<?php

namespace App\Http\Controllers\API;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Response;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return response()->json([
            'categories' => $categories,
            'response_status' => Response::HTTP_OK
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        try{
            $c = Categorie::create([
                 'name' => $request->name,
                 'description' => $request->description
             ]);
             return response()->json([
                 'categorie' => $c,
                 'message' => 'operation success',
                 'response_status' => Response::HTTP_CREATED
             ]);
             
        }
          catch(\Exception $e){
             return response()->json([
                 'message' => 'operation failed',
                 'response_status' => Response::HTTP_INTERNAL_SERVER_ERROR
             ]);
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
