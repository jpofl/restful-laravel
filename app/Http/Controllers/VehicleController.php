<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a list of resource.
     * 
     * @return Response
     */
    public function index(){
        $vehicles = Vehicle::all();
        
        return response()->json(['data' => $vehicles], 200);
    }

}
