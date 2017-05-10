<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index() 
    {
    	$user = Auth::user();
    	return view('Profile.index', compact('user'));
    }
}
