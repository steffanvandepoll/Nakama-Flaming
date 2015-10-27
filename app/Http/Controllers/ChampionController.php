<?php

namespace App\Http\Controllers;

use App\Champion;

use Illuminate\Support\Facades\Response;

class ChampionController extends Controller
{


	public function __construct()
    {
        $this->middleware('guest');
    }

    public function getIndex()
    {
    	$champions = Champion::all();

    	return Response::json($champions);
    }
}
