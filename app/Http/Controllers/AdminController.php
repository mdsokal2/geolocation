<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return view('dashboard.dashboard');
    }

    public function manageUser(){
        $location=Location::all();
        return view('dashboard.manage',[
            'locations'=>$location,
        ]);
    }
}
