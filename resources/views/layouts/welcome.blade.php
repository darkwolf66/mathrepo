
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="mathrepo">
    <meta name="keywords" content="MathRepo,education">
    <meta name="author" content="mathrepo">

    <title>MathRepo - Uma plataforma online para projetos de matemática</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/bootstrap/bootstrap.css')}}">

    <!-- Iconfont Css -->
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/flaticon/flaticon.css')}}">

    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_welcome/vendors/owl/assets/owl.theme.default.min.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets_welcome/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets_welcome/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets_welcome/css/master.css')}}">
</head>
<body id="top-header">
    <header>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6 text-center mt-4">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('/images/logo.png')}}" alt="MathRepo" class="img-fluid">
                </a>
            </div>
        </div>
        <!-- Main Menu Start -->
        <div class="site-navigation main_menu menu-style-2" id="mainmenu-area">
            <nav class="navbar navbar-expand-lg">
                <div class="container">



                    <!-- Toggler -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- Collapse
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item ">
                                <a href="{{url('/')}}" class="nav-link js-scroll-trigger">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="contact.html" class="nav-link">
                                    Alunos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="contact.html" class="nav-link">
                                    Professores
                                </a>
                            </li>
                        </ul>

                        <div class="header-login">
                            {--@if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-solid-border btn-sm">Logar</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-main btn-sm">Registrar</a>
                                    @endif
                                @endif
                            @endif--}
                        </div>
                    </div>  --><!-- / .navbar-collapse -->
                </div> <!-- / .container -->
            </nav>
        </div>
    </header>


    @yield('content')
    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{asset('assets_welcome/vendors/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 4.5 -->
    <script src="{{asset('assets_welcome/vendors/bootstrap/bootstrap.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assets_welcome/vendors/counterup/waypoint.js')}}"></script>
    <script src="{{asset('assets_welcome/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets_welcome/vendors/jquery.isotope.js')}}"></script>
    <script src="{{asset('assets_welcome/vendors/imagesloaded.js')}}"></script>
    <script src="{{asset('assets_welcome/vendors/owl/owl.carousel.min.js')}}"></script>
    <script src="assets/js/script.js"></script>
    @yield('scripts')
</body>
</html>
