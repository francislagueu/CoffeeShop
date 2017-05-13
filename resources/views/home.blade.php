@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h2>Welcome To Arabica Coffee Shop</h2>
    </div>
    <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-left">
                    <img src="{{asset('images/coffee9.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-right">
                        <h1>The power of coffee</h1>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>
                    <br>
                    <a href="#" class="btn btn-default btn-lg showcase-btn">Read more</a>
                </div>
            </div>
        </div>
    </section>
     <section id="testimonial">
      <div class="container">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud"</p>
        <p class="customer">- John Doe</p>
      </div>
    </section>
       <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-left">
                    <img src="{{asset('images/coffee7.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-right">
                        <h1>The power of coffee</h1>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>
                    <br>
                    <a href="#" class="btn btn-default btn-lg showcase-btn">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="info2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left">
              <h2>Info Block One</h2>
              <img src="{{asset('images/coffee8.jpeg')}}" alt="">
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Info Block Two</h2>
              <img src="{{asset('images/coffee6.jpeg')}}" alt="">
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
@endsection
