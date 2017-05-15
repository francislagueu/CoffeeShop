@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">
 <form method="POST" action='/Profile'>
   {{ csrf_field() }}
   <img src="/uploads/avatars/{{ Auth::user()->profile_picture }}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;"><br />
   <div class="form-group">
   	<label for="name">Name:</label>
   	<input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
   </div>
   <div class="form-group">
   <label for="email">Email:</label>
   <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
   </div>
   <div class="form-group">
   <label for="address">Street Address:</label>
   <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
   </div>
   <div class="form-group">
   <label for="city">City:</label>
   <input type="text" class="form-control" id="city" name="city" value="{{$user->city}}">
   </div>
   <div class="form-group">
   <label for="state">State:</label>
   <input type="text" class="form-control" id="state" name="state" value="{{$user->state}}">
   </div>
  <div class="form-group">
    <label for="bio">Bio</label>
    <textarea id="bio" name="bio" class="form-control">{{$user->bio}}</textarea>
  </div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection