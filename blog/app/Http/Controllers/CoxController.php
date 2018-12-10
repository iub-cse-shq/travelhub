<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoxController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('cox.cox');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('cox.cox1');
    }
}
