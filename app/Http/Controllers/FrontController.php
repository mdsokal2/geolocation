<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        Location::addUserLocation($request);
        return view('home');
    }
}
