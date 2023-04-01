<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="classimax" />

    <!-- favicon -->
    <link href="{{ asset('images/favicon.png')}}" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/bootstrap-slider.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">

    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    @yield('headLink')
</head>

<body class="body-wrapper">


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="images/logo.png" width="98" height="38">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item @@home">
                                    <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                                </li>
                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{url('/login')}}">เข้าสู่ระบบ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white add-button" href="ad-listing.html"><i
                                                class="fa fa-plus-circle"></i> Add Listing</a>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        @yield('header')

    </header>

    <body>
        <section class="popular-deals section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>แคมเปญบริจาคให้สิ่งของ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- offer 01 -->
                    <div class="col-lg-12">
                        <div class="trending-ads-slide">
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-deals section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>แคมเปญขอรับบริจาคเงิน</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- offer 01 -->
                    <div class="col-lg-12">
                        <div class="trending-ads-slide">
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.html">
                                                <img class="card-img-top img-fluid" src="@@img-src"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.html">AAAA</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.html"><i class="fa fa-folder-open-o"></i>BBBB</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.html"><i class="fa fa-calendar"></i>@@date</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <!-- 
Essential Scripts
=====================================-->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap-slider.js')}}"></script>
    <script src="{{ asset('plugins/tether/js/tether.min.js')}}"></script>
    <script src="{{ asset('plugins/raty/jquery.raty-fa.js')}}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{ asset('plugins/google-map/map.js')}}" defer></script>

    <script src="{{ asset('js/script.js')}}"></script>

</body>

</html>