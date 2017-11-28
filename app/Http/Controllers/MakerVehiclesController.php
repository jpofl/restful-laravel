<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerVehiclesController extends Controller
{
    /**
     * Display a list of resource.
     * 
     * @return Response
     */
    public function index($id){
        return "Showing the vehicles of the maker $id";
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
        //
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
