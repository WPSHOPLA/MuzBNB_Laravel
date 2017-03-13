<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900|PT+Serif:400,400i,700,700i"
          rel="stylesheet">

    <!-- font awsome icon --->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }} ">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css//bootstrap.min.css') }} " media="all">

    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css') }} ">

    <!-- animation css --->
    <link rel="stylesheet" href="{{asset('css/animate.css') }} " media="all">

    <!--Font Style-->
    <link rel="stylesheet" href="{{asset('css/font.css') }} ">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/style.css') }} ">

    <!-- Custom Style -->
<!--link rel="stylesheet" href="{{asset('css/style_origin.css') }} "-->

    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{asset('css/responsive.css') }} ">
<!--link rel="stylesheet" href="{{asset('css/responsive_origin.css') }} "-->

@yield('css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<section id="header_menu" class="">

    <div class="container-fluid">

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="register_area hides_desktop" id="navbar-1">
                <p><a href="">Login / Sign up</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 pull-left">
                <nav class="navbar">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('')}}">
                            <img src="{{asset('images/muzbnb-logo.png')}}" alt=""/>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar_menu">

                        <form class="navbar-form navbar-left serach-area">
                            <div class="form-group">
                                <input type="text" id="search_box" class="form-control"
                                       placeholder="Where do you want to go?">
                            </div>
                            <button type="submit" class="searchicon back-red"><i class="fa fa-search"></i></button>
                        </form>

                        <ul class="nav navbar-nav">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">BECOME A HOST</a></li>
                            <li><a href="#">HELP</a></li>
                        </ul>
                    </div>
                </nav>

            </div>

            <div class="col-md-2 register_area pull-right">
                <p><a href="">Login / Sign up</a></p>
            </div>
        </div>
    </div>
</section>

@yield('content')

<section id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <label class="hidden" for="country_picker"></label>
                <select class="selectpicker" id="country_picker">
                    <option>English</option>
                    <option>Japanese</option>
                    <option>Relish</option>
                </select>
                <label class="hidden" for="currency_picker"></label>
                <select class="selectpicker" id="currency_picker">
                    <option>USD</option>
                    <option>CAD</option>
                    <option>YUAN</option>
                </select>
            </div>

            <div class="col-md-3 col-sm-6 footer-widget">
                <h2>MUZBNB</h2>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Press</a></li>
                    <li><a href="">Ambassador Program</a></li>
                    <li><a href="">Events</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 footer-widget">
                <h2>DISCOVER</h2>
                <ul>
                    <li><a href="">Become a Host</a></li>
                    <li><a href="">Sign Up</a></li>
                    <li><a href="">City Guides</a></li>
                    <li><a href="">Invite Friends</a></li>
                    <li><a href="">Gift Cards</a></li>
                    <li><a href="">How it Works</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 footer-widget">
                <h2>HELP CENTER</h2>
                <ul>
                    <li><a href="">Support Center</a></li>
                    <li><a href="">Terms & Polices</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Site Map</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Footer area End -->

<!-- Copy right area start -->
<section id="copy_right">
    <div class="container">
        <div class="row">
            <div class="copy_p text-center">
                <p class="font-14-b-16 text-gray4A">Copyright &copy; 2017 Muzbnb. All rights reserved</p>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- Page level Script -->
@yield('script')
<!-- End Page level Script -->

</body>
</html>