<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function index() 
    {
    	$user = Auth::user();
    	return view('Profile.index', compact('user'));
    }


    public function edit() 
    {
    	$user = Auth::user();
    	return view('Profile.edit', compact('user'));
    }
    public function upload()
    {
    	$user = Auth::user();
    	return view('Profile.upload', compact('user'));
    }
    public function update_avatar(Request $request)
    {
    	//Handle the user upload of avatar
    	if($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . "." . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));
    		$user = Auth::user();
    		$user->profile_picture = $filename;
    		$user->save();

    		return view('Profile.upload', array('user' => Auth::user()) );

    	}
    }

    public function update()
    {
    	$user = Auth::user();

    	$user->name = request('name');
    	$user->email = request('email');
    	$user->address = request('address');
    	$user->city = request('city');
    	$user->state = request('state');
    	$user->bio = request('bio');
    	$user->save();

	return redirect('Profile');
    }

    
}
