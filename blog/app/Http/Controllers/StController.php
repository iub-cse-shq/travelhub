<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('st.st');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('st.st1');
    }
}
