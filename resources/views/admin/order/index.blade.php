@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$order->name}}</h3>
                </div>
                    <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->menuItems as $item)
                                <li class="list-group-item">
                                    <span class="badge">{{ $item['price']}}</span>
                                    {{ $item['item']['name']}} | {{ $item['quantity']}} units
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    <div class="panel-footer">
                        <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection