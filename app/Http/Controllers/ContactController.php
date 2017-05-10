<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
   /**
    * Show the form for creating a new resource.
    *
    * @return Responce
    */
   public function create()
   {
   	return view('Contact.create');
   }

   /**
    *  Store a newly created resource in storage.
    * 
    * @return Responce
    */
   public function store(ContactFormRequest $request)
   {
   \Mail::send('mails.contact',
   	[
   	'name' => $request->get('name'),
   	'email' => $request->get('email'),
   	'user_message' => $request->get('message')
   	], function($message)
   	{
   		$message->from(env('MAIL_FROM'));
   		$message->to(env('MAIL_TO'), 'CoffeeShop Admin')->subject('CoffeeShop Feedback');
   	});
   return redirect()->route('Contact')->with('message', 'Thanks for contacting us!');
}
}