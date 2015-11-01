<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Flame;

use Illuminate\Support\Facades\Response;

class SlideController extends Controller
{


	public function __construct()
    {

    }

    public function getIndex()
    {
    	$slides = Slide::all();

    	foreach($slides as $slide){
  			$slide->flame = Flame::findOrFail($slide->flame_id);
    	}

    	return Response::json($slides);
    }
}
