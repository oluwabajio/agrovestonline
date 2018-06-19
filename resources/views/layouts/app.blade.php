<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Agrovest Online Agricultural Consultancy Services</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
    
</head>

<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <a href="{{url('/')}}">
                    <img src="{{ asset('assets/img/agrovest.png') }}" style="" alt="Agrovest">
                </a>
    
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li><a class="nav-link" style="padding-right:20px; color: #555555;" href="#">Home</a></li>
                        <li><a class="nav-link" style="padding-right:20px; color: #555555;" href="{{url('about')}}">About Us</a></li>
                        <li><a class="nav-link" style="padding-right:40px; color: #555555;" href="{{url('about')}}">Contact Us</a></li>
                       
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" style="padding-right:20px" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li> <a href="{{url('agric-business-expo')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Agric Business Expo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>





 {{-- <div class="navbar navbar-default navbar-static-top container">

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
    <a href="http://edojobs.edostate.gov.ng">
        <img src="http://edojobs.edostate.gov.ng/wp-content/themes/edojobs/assets/images/logo.jpg" style="width:110px; height: 60px;" alt="EdoJobs">
    </a>
</div>

        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-right">
                                <div class="nav-right-area">
                <nav class="navigation">
                    <ul class="nav navbar-nav"><li id="menu-item-11293" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-home  current-menu-item  page_item  page-item-100  current_page_item"><a href="http://edojobs.edostate.gov.ng/">Home</a></li>
<li id="menu-item-11294" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="http://edojobs.edostate.gov.ng/index.php/about-us/">About Us</a></li>
<li id="menu-item-11208" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="http://edojobs.edostate.gov.ng/index.php/applicants/">Applicants</a></li>
<li id="menu-item-11295" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="http://edojobs.edostate.gov.ng/index.php/blog/">Blog</a></li>
<li id="menu-item-11296" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="http://edojobs.edostate.gov.ng/index.php/contact-us/">Contact Us</a></li>
<li class="cs-login-area">                            <div class="cs-loginsec">
                        <ul class="cs-drp-dwn">
                            <li><div class="user-account">
        <div class="join-us"><i class="cs-color icon-pencil6"></i><a class="join-us" class="cs-color" data-target="#join-us" data-toggle="modal" href="#">Register</a><div class="modal fade" id="join-us" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                               --}}












        <main class="py-409">
            @yield('content')
        </main>



        





    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    </div>
</body>


{{-- {{"Footer Begins Here"}} --}}
<footer>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!------ Include the above in your HEAD tag ---------->
        
            <!-- footer -->
            <div class="footer">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ft-logo"><img src="{{ asset('assets/img/agrovest.png') }}" alt=""></div>
                        </div>
                    </div>
                    <hr class="footer-line">
                    <div class="row ">
                        <!-- footer-about -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="footer-widget ">
                                <div class="footer-title">Company</div>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{url('about')}}">Support</a></li>
                                    <li><a href="{{url('about')}}">Press</a></li>
                                    <li><a href="{{url('agric-business-expo')}}">Agric Business Expo</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-about -->
                        <!-- footer-links -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="footer-widget ">
                                <div class="footer-title">Contacts</div>
                                <ul class="list-unstyled">
                                    <li><a href="">Admin@agrovestonline.com</a></li>
                                    <li><a href="#">08169242925</a></li>
                                    <li><a href="">Nigeria</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-links -->
                        <!-- footer-links -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="footer-widget ">
                                <div class="footer-title">Social</div>
                                <ul class="list-unstyled">
                                    <li><a href="http://www.twitter.com">Twitter</a></li>
                                    <li><a href="#">Google +</a></li>
                                    <li><a href="#">Linked In</a></li>
                                    <li><a href="#">Facebook</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.footer-links -->
                        <!-- footer-links -->
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6 ">
                            <div class="footer-widget ">
                                <h3 class="footer-title">Subscribe Newsletter</h3>
                                <form method="POST" action="{{url('newsletters/store')}}">
                                    <div class="newsletter-form">
                                        {{-- <input class="form-control" id="form-controlf" placeholder="Enter Your Email address" type="text" style="color:#000000"> --}}
                                       
                                        <input class="form-control" name="emailnewsletter" id="emailnewsletter" style="border-radius: 0px; font-size: 14px; font-weight: 700; width: 100%; height: 64px; padding: 16px 20px; line-height: 1.42857143; border: 1px solid #d6dadc; background-color: #fff; text-transform: capitalize; letter-spacing: 0px; margin-bottom: 30px; -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0); box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0); -webkit-appearance: none; color: #011c28; " placeholder="Enter Your Email address" type="text">
                                
                                        <button class="btn btn-default btn-sm" type="submit">Subscribe</button>
                                    </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                        <!-- /.footer-links -->
                        <!-- tiny-footer -->
                    </div>
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <div class="tiny-footer">
                                <p>Copyright © All Rights Reserved 2018 | Template Design & Developed by <a href="https://oluwabajio.com.ng" target="_blank" class="copyrightlink">Oluwabajio</a></p>
                            </div>
                        </div>
                        <!-- /. tiny-footer -->
                    </div>
                </div>
            </div>
            <!-- /.footer -->
</footer>
{{-- {{"Footer Ends Here"}} --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
