<?php

namespace App\Http\Controllers;

use App\Flame;
use App\Champion;
use App\FlameType;

class HomeController extends Controller
{


	public function __construct()
    {
        $this->middleware('guest');
    }

    public function getIndex()
    {
    	return view('home/index'); 
    }
}
