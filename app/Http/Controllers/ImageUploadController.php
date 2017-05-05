<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Input;
use Image; // reference á image classa

class ImageUploadController extends Controller
{
	// Get aðferð til að rendera upload síðuna
    public function view(){
    	return view('upload', array('user' => Auth::user()) );
    }
    //aðferð til að uploada mynd í möppu og database!
    public function upload(){
    	if(Input::hasFile('file')){ // ef notandi hefur sett inn mynd
    		$name = Input::text('name');
    		$file = Input::file('file'); //file sett í variable
    		$file->move('uploads/images', $file->getClientOriginalName()); // mynd vistuð  í images möppu í uploads
    		


    	}

    }
}
