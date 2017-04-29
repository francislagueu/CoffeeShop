@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Confirmation</div>

                <div class="panel-body">
                    Hi {{$name}} <br/>
                    <p>Your registration is completed. Please click the link below to get access.</p><br>
                    {{route('confirmation', $token)}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
