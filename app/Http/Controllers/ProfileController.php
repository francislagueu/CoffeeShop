<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use App\Http\Requests;

use Illuminate\Support\Collection;

class ProfileController extends Controller
{
    public function index() 
    {
    	$user = Auth::user();
        $orders = $user->orders;
       
        $orders->transform(function($order, $key){
            $order->cart = unserialize(base64_decode($order->cart));
            return $order;
        });
    	return view('Profile.index', ['user'=>$user, 'orders'=>$orders]);
    }

    public function upload(){
        $user = Auth::user();
        return view('Profile.upload', compact('user'));
    }

    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->profile_picture = $filename;
            $user->save();
            return view('Profile.upload', array('user'=>Auth::user()));
        }
    }

    public function update(){
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
