<?php

namespace App\Http\Controllers;

use App\Champion;

use Illuminate\Support\Facades\Response;

class ChampionController extends Controller
{


	public function __construct()
    {

    }

    public function getIndex()
    {
    	$champions = Champion::all();

    	return Response::json($champions);
    }
}
