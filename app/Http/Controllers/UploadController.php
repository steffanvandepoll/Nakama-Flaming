<?php

namespace App\Http\Controllers;

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
}
