<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //
	public function index ()
	{
//echo "aa";
		return view('welcome');
	}

	public function contact()
	{
//		return "contact";
		return view("contact");
	}
}
