<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawController extends Controller
{
    public function index()
    {
    	//echo "hello";
    	return view('law.law');
    }
	public function index1()
    {
    	//echo "hello";
    	return view('law.law1');
    }
}
