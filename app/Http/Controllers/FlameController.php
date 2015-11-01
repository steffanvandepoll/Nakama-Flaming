<?php

namespace App\Http\Controllers;

use App\Flame;
use App\Champion;
use App\FlameType;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use Auth;

use Input;

class FlameController extends Controller
{


	public function __construct()
    {

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

    public function getAdd(){
      
        $flame = new Flame;

        return view('flame/edit')->with('flame', $flame); 
    }

     public function getEdit($id){
      
        $flame = Flame::findOrFail($id);
        $flame->champions = Champion::findMany(explode(",", $flame->champion_ids));

        return view('flame/edit')->with('flame', $flame); 
    }

     public function getRemove($id){
      
        $flame = Flame::findOrFail($id);
        $flame->delete();

        return redirect()->action('HomeController@getIndex');
    }

    public function postAdd(Request $request){
        $flame = new Flame;

        return $this->saveFlame($flame, $request);
    }


    public function postEdit(Request $request){

        if($request->input('flame_id')){
             $flame =  Flame::findOrFail($request->input('flame_id'));
        }
        else{
            $flame = new Flame;
        }
       
        $flame->title = $request->input('title');
        $flame->champion_ids = $request->input('champion_ids');
        $flame->type_ids = $request->input('flame_types');
        $flame->user_id = Auth::user()->id;
        $flame->updated_at = time();
        
        if ($request->hasFile('file') && $request->file('file')->isValid()) {

            $filename = time().'.'.$request->file('file')->getClientOriginalExtension();
            $request->file('file')->move('assets/sfx', $filename);
            $flame->filepath = $filename;
        }

        $flame->save();

        return redirect()->action('HomeController@getIndex');
        
    }
}
