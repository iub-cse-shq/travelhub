<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SunController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('sun.sun');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('sun.sun1');
    }
}
