<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //

    public function index()
    {
    	$site='Dinamic date form youtube';

    	return view('youtube', ['data' => $site]);
    }
}
