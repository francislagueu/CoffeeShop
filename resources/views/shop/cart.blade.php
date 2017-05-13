@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($menus as $menu)
                        <li class="list-group-item">
                            <span class="badge">{{$menu['quantity']}}</span>
                            <strong>{{ $menu['item']['name'] }}</strong>
                            <span class="label label-success"> ${{$menu['price']}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reduce by 1</a></li>
                                    <li><a href="#">Delete All</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md offset-3 col-sm-offset-3">
                <strong>Total:  <em class="pull-right">${{ $totalPrice}} </em></strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md offset-3 col-sm-offset-3">
                <a  href="{{route('checkout')}}"  type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>

    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md offset-3 col-sm-offset-3">
                <h2>No Menu Items in the Cart!!</h2>
            </div>
        </div>
    @endif
@endsection
