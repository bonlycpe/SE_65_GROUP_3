
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
                                <li class="nav-item @@profile">
                                    <a class="nav-link" href="{{url('/profile')}}">โปรไฟล์</a>
                                </li>
                                <li class="nav-item @@profile">
                                    <a class="nav-link" href="{{url('/requestVerify')}}">ขอสิทธ์เป็นผู้เปิดแคมเปญ</a>
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
                            <a>หมวดหมู่ : </a>
                            <a href="/food">อาหาร</a>
                            <a href="/apparel">เครื่องนุ่งห่ม</a>
                            <a href="/medicine">ยา</a>
                            <a href="/money">บริจาคเงิน</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="sectione-title-wrap mb-5">
                            <h4 class="sectione-title">แคมเปญบริจาคให้สิ่งของ </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-ads-slide">
                            @foreach($campaignObject as $co)
                            @if ( $co->Tag == 'Apparel' )
                                @if ( $co->Status == 'ACTIVE' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="card">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="cardd">{{$co->Description}}</p>
                                                {{-- <p class="cardd">{{$co->Tag}}</p> --}}
                                                <p class="badges">{{$co->Tag}}</p>
                                                {{-- badges --}}
                                                <div class="row">
                                                    <ul class="list-inline product-meta">
                                                        <li class="list-inline-item">
                                                            <a href="/request"><i
                                                                    class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                                        </li>
                                                        <a
                                                            href=""><button>รับบริจาค</button>
                                                        </a>
                                                    </ul>
                                                </div>
                                                <div class="product-ratings">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                            aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <span class="SttausA">{{$co->Status}}</span>
                                        </div>
                                    </div>
                                </div>
                                
                            @elseif ( $co->Status == 'TERMINATE' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="card">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="badges">{{$co->Tag}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <i class="fa fas fa-ban">ยุติแคมเปญ</i>
                                                    </li>                                                  
                                                </ul>
                                            </div>
                                            <span class="SttausT">{{$co->Status}}</span>
                                        </div>
                                    </div>
                                </div>
                                
                            @elseif ( $co->Status == 'FINISHED' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="card">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="cardd">{{$co->Description}}</p>
                                                <p class="badges">{{$co->Tag}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <a href="/request"><i
                                                                class="fa fab fa-angellist"></i>FINISHED</a>
                                                    </li>
                                                </ul>                                            
                                            </div>
                                            <span class="SttausF">{{$co->Status}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- @else --}}
                            @endif

                            @endforeach
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