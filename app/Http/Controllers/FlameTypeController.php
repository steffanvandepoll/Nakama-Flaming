<?php

namespace App\Http\Controllers;

use App\FlameType;

use Illuminate\Support\Facades\Response;

class FlameTypeController extends Controller
{


	public function __construct()
    {

    }

    public function getIndex()
    {
    	$types = FlameType::all();

    	return Response::json($types);
    }
}
