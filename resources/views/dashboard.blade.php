@extends('layouts.app')
<link rel="stylesheet" href={{asset('css/dashboard' )}} >
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 side-nav side">
           <div class="panel panel-default">
                <div class="panel-heading">Navigation</div>

                <div class="panel-body">
                    <a href="" class="btn btn-default form-control">Home</a>
                </div>
                 <div class="panel-body">
                    <a href="" class="btn btn-default form-control">Menus</a>
                </div>
                 <div class="panel-body">
                    <a href="" class="btn btn-default form-control">Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 main">
        
        </div>
    </div>
</div>
@endsection
