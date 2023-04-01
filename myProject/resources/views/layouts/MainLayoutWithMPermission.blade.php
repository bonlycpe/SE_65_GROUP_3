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
                        <a class="navbar-brand" href="{{url('/home')}}">
                            <img src="{{asset('images/logo.png')}}" width="98" height="38">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item @@home">
                                    <a class="nav-link" href="{{url('/home')}}">หน้าหลัก</a>
                                </li>
                                <li class="nav-item @@profile">
                                    <a class="nav-link" href="{{url('/profile')}}">โปรไฟล์</a>
                                </li>
                                <li class="nav-item @@profile">
                                    <a class="nav-link" href="{{url('/managerPage')}}">โครงการของฉัน</a>
                                </li>
                                <!--<li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>-->

                                <!-- Dropdown list -->
                                <!--	<ul class="dropdown-menu">
									<li><a class="dropdown-item @@dashboardPage" href="dashboard.html">Dashboard</a></li>
									<li><a class="dropdown-item @@dashboardMyAds" href="dashboard-my-ads.html">Dashboard My Ads</a></li>
									<li><a class="dropdown-item @@dashboardFavouriteAds" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a></li>
									<li><a class="dropdown-item @@dashboardArchivedAds" href="dashboard-archived-ads.html">Dashboard Archived Ads</a></li>
									<li><a class="dropdown-item @@dashboardPendingAds" href="dashboard-pending-ads.html">Dashboard Pending Ads</a></li>
									
									<li class="dropdown dropdown-submenu dropright">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
					
										<ul class="dropdown-menu" aria-labelledby="dropdown0501">
											<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
											<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@pages">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>-->
                                <!-- Dropdown list -->
                                <!--	<ul class="dropdown-menu">
									<li><a class="dropdown-item @@about" href="about-us.html">About Us</a></li>
									<li><a class="dropdown-item @@contact" href="contact-us.html">Contact Us</a></li>
									<li><a class="dropdown-item @@profile" href="user-profile.html">User Profile</a></li>
									<li><a class="dropdown-item @@404" href="404.html">404 Page</a></li>
									<li><a class="dropdown-item @@package" href="package.html">Package</a></li>
									<li><a class="dropdown-item @@singlePage" href="single.html">Single Page</a></li>
									<li><a class="dropdown-item @@store" href="store.html">Store Single</a></li>
									<li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
									<li><a class="dropdown-item @@singleBlog" href="single-blog.html">Blog Details</a></li>
									<li><a class="dropdown-item @@terms" href="terms-condition.html">Terms &amp; Conditions</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>-->
                                <!-- Dropdown list -->
                                <!--<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="category.html">Ad-Gird View</a></li>
									<li><a class="dropdown-item @@listView" href="ad-list-view.html">Ad-List View</a></li>
									
									<li class="dropdown dropdown-submenu dropleft">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
					
										<ul class="dropdown-menu" aria-labelledby="dropdown0201">
											<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
											<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>-->
                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{url('/logout')}}">ออกจากระบบ</a>
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
        <!-- Container Start -->
        @yield('content')
        <!-- Container End -->
    </body>


    <!--============================
=            Footer            =
=============================-->
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
        @yield('footer')
    </footer>

    <!-- 
Essential Scripts
=====================================-->
    @yield('script')
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