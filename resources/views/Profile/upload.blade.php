@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">
<img src="/uploads/avatars/default-avatar.jpg{{ $user->avatar }}" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 25px;"><br />
<form enctype="multipart/form-data" action="/Profile/upload" method="POST">
{{ csrf_field() }}
<label>Update Profile Image</label>
<input type="file" name="avatar">

<input type="submit" class="pull-right btn btn-sm btn-primary">
</form>
</div>
</div>
@endsection