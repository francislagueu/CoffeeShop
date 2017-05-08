@extends('layouts.app')

@section('title')
    Shop Here
@endsection
@section('content')
    @foreach($menus->chunk(3) as $menuChunk)
        <div class="row">
            @foreach($menuChunk as $menu)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$menu->image}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>{{$menu->name}}</h3>
                            <p class="description">{{ $menu->description}}</p>
                            <div class="clearfix">
                                <div class="pull-left price">${{ $menu->price}}</div>
                                <a href="{{ route('menu.addItemToCart',['id'=>$menu->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection