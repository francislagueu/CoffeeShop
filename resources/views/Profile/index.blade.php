@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <img src="/uploads/avatars/{{ $user->profile_picture }}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;"><br />
    <p>{{ $user->name }}<br />
    {{ $user->email }}<br />
    {{ $user->address }}<br />
    {{ $user->city }}, 
    {{ $user->state }}<br />
    Bio: {{ $user->bio }}
    </p>
    <a href="/Profile/Edit">Edit Profile</a><br />
    <a href="/Profile/upload">Upload Profile Picture</a>
    
  </div>
  
</div>
@endsection