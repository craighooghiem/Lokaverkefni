<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShowImagesController extends Controller
{
	public function showImages(){
	$images = DB::table('images')->get();
    foreach($images as $image){
    	echo $image->title;
    }
	}
   
}
