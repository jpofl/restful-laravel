<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maker;

class MakerController extends Controller
{
    /**
     * Display a list of resource.
     * 
     * @return Response
     */
    public function index(){
        $makers = Maker::all();

        return response()->json(['data' => $makers], 200);
    }

    /**
     * Store a newly created resource in storage
     * 
     * @return Response
     */
    public function store(){
        //
    }

    /**
     * Display the specified resource
     * 
     * @param int $id
     * @return Response
     */
    public function show($id){
        $maker = Maker::find($id);

        if(!$maker){
            return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
        }

        return response()->json(['data' => $maker], 200);
    }

    /**
     * Update the specified resource in storage
     * 
     * @param int $id
     * @return Response
     */
    public function update($id){
        //
    }

    /**
     * Remove the specified resource from storage
     * 
     * @param int $id
     * @return Response
     */
    public function destroy($id){
        //
    }
}
