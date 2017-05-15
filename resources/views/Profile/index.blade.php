@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-1">
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
  <div class="col-md-4 col-md-offset-1">
    <h2>My Orders</h2>
    @foreach($orders as $order)
      <div class="panel panel-default">
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