<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontsitecontroller extends Controller
{
    public function showhome(){
    	return view('frontsite.home');
    }

    public function showcontact(){
    	return view('frontsite.contact');
    }

    public function showabout(){
    	return view('frontsite.about');
    }
}
