<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index(){

        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

     public function edit($id)
    {
        //
    }

     public function update(Request $request, $id)
    {
        //
    }

     public function destroy($id)
    {
        //
    }

}
