<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Arabica Coffee
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;          
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('About.index')}}">About</a></li>
                        <li><a href="{{route('Contact')}}">Contacts</a></li>
                        <!-- Authentication Links -->

                        @if (Auth::guest())

                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                <a href="{{route('menu.cart')}}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart
                                    <span class="badge">{{Session::has('cart')?Session::get('cart')->totalQty : ''}}</span>
                                </a>
                            </li>
                            <li><a href="{{ route('Profile.index')}}">Profile</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
        @endif
        @yield('content')
    </div>
    <footer>
        <p class="text-center">Arabica Coffee Copyright &copy; 2017</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
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
</body>
</html>
