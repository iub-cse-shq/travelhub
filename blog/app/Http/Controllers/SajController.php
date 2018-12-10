<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SajController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('saj.saj');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('saj.saj1');
    }
}
