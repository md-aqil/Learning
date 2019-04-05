<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //

    public function index(Request $request)
    {
    	$request->validate([
    		'user'=> 'required|email', 

    		'password'=> 'required|min:5',  
    	]);
    	
    	print_r($request->input());
    }
}
