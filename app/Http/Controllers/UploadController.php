<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

class UploadController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
    	return view('upload/index');
    }

    public function getFileUpload(Request $request){

    }

}
