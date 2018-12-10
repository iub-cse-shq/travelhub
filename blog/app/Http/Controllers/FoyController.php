<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoyController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('foy.foy');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('foy.foy1');
    }
}
