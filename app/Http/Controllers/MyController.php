<?php

namespace App\Http\Controllers;

class MyController extends Controller{
    public function index($name = 'User'){
        return view('hi', ['name' => $name]);
    }
}