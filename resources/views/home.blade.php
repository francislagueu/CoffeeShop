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
@section('scripts')
     <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        window.sr = ScrollReveal(){
            sr.reveal('.navbar',{
                duration:2000,
                origin:'bottom'
            });
            sr.reveal('.showcase-left', {
                duration:2000,
                origin:'top',
                distance:'300px'
            });
             sr.reveal('.showcase-right', {
                duration:2000,
                origin:'top',
                distance:'300px'
            });
             sr.reveal('.showcase-btn', {
                duration:2000,
                origin:'bottom',
                delay:2000
            });
             sr.reveal('#testimonial div', {
                duration:2000,
                origin:'bottom'
            });
             sr.reveal('.info-left', {
                duration:2000,
                origin:'left',
                distance:'300px'
                viewFactor:0.2
            });
             sr.reveal('.info-right', {
                duration:2000,
                origin:'right',
                distance:'300px'
                viewFactor:0.2
            });
        }
    </script>
    <script>
    $(function(){
        $('a[href*="#"]:not([href="#")').click(function(){
            if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&
            location.hostname==this.hostname){
                var target = $(this.hash);
                target = target.length ? target:$('[name='+ this.hash.slice(1)+']');
                if(target.length){
                    $('html, body').animate({
                        scrollTop:target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
@endsection
