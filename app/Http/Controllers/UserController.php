<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth; // Reference á authentication classa
use Image; // reference á image classa
class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){
    	//controller aðferð til að updata profile myndm
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension(); // filename = tími til að fá alltaf random filename
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();


    	}

 return view('profile', array('user' => Auth::user()) ); // refresh með nýrri mynd !!

    }
}

