<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('rang.rang');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('rang.rang1');
    }
}
