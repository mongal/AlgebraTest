<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$ble = 'bla';
        return view('home');
    }
	
	public function aboutUs()
	{
		$bla = 'bla';
		return view('about_us');
	}

  
}
