<?php

namespace App\Http\Controllers;

use App\Flame;
use App\Champion;
use App\FlameType;

class HomeController extends Controller
{


	public function __construct()
    {
        
    }

    public function getIndex()
    {
    	return view('home/index'); 
    }
}
