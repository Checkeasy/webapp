<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('index');
    }

    public function signup()
    {
    	return view('signup');
    }

    public function customer()
    {
    	return view('customer');
    }

    public function restaurant()
    {
    	return view('restaurant');
    }

    public function thanks()
    {
    	return view('thank_you');
    }
}
