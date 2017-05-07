<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
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
    	if(Input::hasFile('image')){ // ef notandi hefur sett inn mynd
    		$image = Input::file('image');
			$filename = $image->getCLientOriginalName();



    		$product = new Product();
    		$product->title = Input::get('title');
    		$product->image = $filename;




    		// vista í database
    		$saveflag = $product->save();
    		if($saveflag){
    			$image->move('uploads/images', $image->getCLientOriginalName()); // mynd vistuð  í images möppu í uploads
    			 return view('profile', array('user' => Auth::user()) ); 

    		}

    		

}

}

}
