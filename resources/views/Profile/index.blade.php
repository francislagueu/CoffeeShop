@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">
 <form method="POST" action="/posts">
   {{ csrf_field() }}
   <img src="/uploads/avatars/default-avatar.jpg{{ $user->avatar }}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;"><br />
   <div class="form-group">
   	<label for="name">Name:</label>
   	<input type="text" class="form-control" id="name" name="name">
   </div>
   <div class="form-group">
   <label for="email">Email:</label>
   <input type="text" class="form-control" id="email" name="email">
   </div>
   <div class="form-group">
   <label for="address">Street Address:</label>
   <input type="text" class="form-control" id="address" name="address">
   </div>
   <div class="form-group">
   <label for="city">City:</label>
   <input type="text" class="form-control" id="city" name="city">
   </div>
   <div class="form-group">
   <label for="state">State:</label>
   <input type="text" class="form-control" id="state" name="state">
   </div>
  <div class="form-group">
    <label for="bio">Bio</label>
    <textarea id="bio" name="bio" class="form-control"></textarea>
  </div>
  <form enctype="multipart/form-data" action="/profile" method="POST">
   <label>Update Profile Image</label>
   <input type="file" name="avatar">
   </form><br />
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection