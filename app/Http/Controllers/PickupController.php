<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index(){
        return view('pickup.pickup');
    }

    public function storepickup(Request $request){
        dd($request);
    }
}