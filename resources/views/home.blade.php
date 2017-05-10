@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators" >
                <li data-target="#my-slider" data-slide-to="0" class="active tales img-responsive"></li>
                <li data-target="#my-slider" data-slide-to="1" ></li>
                <li data-target="#my-slider" data-slide-to="2" ></li>
            </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('images', 'carousel1.jpeg')}}" alt="" class="tales img-responsive">
                        <div class="carousel-caption">
                            <h2>Flavour of South America Coffee</h2>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{url('images', 'carousel2.jpg')}}" alt="" class="tales img-responsive">
                        <div class="carousel-caption">
                            <h2>African Caramel Coffee</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('images', 'carousel3.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h2>Colombian Coffee</h2>
                        </div>
                    </div>
                </div>
                <a href="#my-slider" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a href="#my-slider" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
                    <span class="sr-only">Previous</span>
                </a>
            </div>
        </div>
    </div>
    @foreach($menus->chunk(3) as $menuChunk)
        <div class="row">
            @foreach($menuChunk as $menu)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{url('images',$menu->image)}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>{{$menu->name}}</h3>
                            <p class="description">{{ $menu->description}}</p>
                            <br>
                            <p>Process Time: {{$menu->process}} min</p>
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
