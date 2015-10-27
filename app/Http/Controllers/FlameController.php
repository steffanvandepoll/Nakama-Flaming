<?php

namespace App\Http\Controllers;

use App\Flame;
use App\Champion;
use App\FlameType;

use Illuminate\Support\Facades\Response;

class FlameController extends Controller
{


	public function __construct()
    {
        $this->middleware('guest');
    }

    public function getIndex()
    {
    	$flames = Flame::all();

    	foreach($flames as $flame){
  			$flame->types = FlameType::findMany(explode(",", $flame->type_ids));
  			$flame->champions = Champion::findMany(explode(",", $flame->champion_ids));
    	}

    	return Response::json($flames);
    }
}
