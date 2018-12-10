<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JafController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('jaf.jaf');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('jaf.jaf1');
    }
}
