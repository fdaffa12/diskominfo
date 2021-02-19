<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    <!-- Site Metas -->
    <title>HOME</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('public/images/logdis.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('public/images/logdis.png')}}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{url('public/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('public/css/style1.css')}}" rel="stylesheet">
    <link href="{{url('public/css/new.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{url('public/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{url('public/css/colors.css')}}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{url('public/css/version/tech.css')}}" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/images/logdis.png')}}" width="150px" height="60px" style="vertical-align: middle;" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        @foreach($pages as $page)
                                        <a class="nav-link" href="{{url('page')}}/{{$page->slug}}" style="color: #333 !important;">{{$page->title}}</a>
                                        @endforeach     
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        @foreach($categories as $cat)
                                        <a class="nav-link" href="{{url('category')}}/{{$cat->slug}}" style="color: #333 !important;">{{$cat->title}}</a>
                                        @endforeach     
                                    </li>
                                    <a class="nav-link" href="{{url('aplikasi')}}" style="color: #333 !important;">Aplikasi</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                            </li>                   
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact-us')}}">Contact</a>
                            </li>
                        <ul class="navbar-nav mr-2" style="margin-left: 620px;">
                            <i id="search-btn" class="fa fa-search fa-2x"></i>
                                <div id="search-overlay" class="block">
                                  <div class="centered">
                                    <div id='search-box'>
                                      <i id="close-btn" class="fa fa-times fa-2x"></i>
                                      <form action="{{url('search')}}" id='search-form' method="GET" target='_top'>
                                        <input type="text" id="query" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search" />
                                        <button id='search-button' type='submit'>                     
                                        <i class="fa fa-search"></i>
                                </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <h2 class="widget-title">Contact Us</h2>
                                    <p>{{$setting->address}}</p>
                                    <p><i class="fa fa-phone" style="color: #00b7e5;"></i> {{$setting->phone}}</p>
                                    <p><i class="fa fa-envelope-o" style="color: #00b7e5;"></i> E-mail: <a class="text-success" href="#">{{$setting->email}}</a></p>
                                <div class="social">
                                    <br>
                                    <h2 class="widget-title">Follow Us</h2>
                                    @foreach($setting->social as $key=>$social)
                                    <a href="{{$social}}" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-{{$icons[$key]}}"></i></a>
                                    @endforeach
                                </div>

                                <hr class="invis">
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Tautan Langsung</h2>
                            <div class="link-widget">
                                <ul>
                                    @foreach($pages as $page)
                                    <li><a href="{{url('page')}}/{{$page->slug}}">{{$page->title}}</a></li>
                                    @endforeach
                                    <li><a href="{{url('contact-us')}}">Hubungi Kami</a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

            </div><!-- end container -->
        </footer><!-- end footer -->
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{url('public/js/jquery.min.js')}}"></script>
    <script src="{{url('public/js/tether.min.js')}}"></script>
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/js/custom.js')}}"></script>
   

</body>
</html>

        <script>
            $(document).ready(function () {
                $('#close-btn').click(function () {
                    $('#search-overlay').fadeOut();
                    $('#search-btn').show();
                });
                $('#search-btn').click(function () {
                    $(this).hide();
                    $('#search-overlay').fadeIn();
                });
            });
        </script>
        <script>
            $(document).ready(function() {
            $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
            $('#toTopBtn').fadeIn();
            } else {
            $('#toTopBtn').fadeOut();
            }
            });

            $('#toTopBtn').click(function() {
            $("html, body").animate({
            scrollTop: 0
            }, 1000);
            return false;
            });
            });
        </script>