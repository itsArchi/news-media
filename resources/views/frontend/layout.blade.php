<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/image/logo125x125.png">
    <title>NewsMedia - Hot News Today!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- theme meta -->
    <meta name="theme-name" content="newsbit" />
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/dashboardFrontend/plugins/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/dashboardFrontend/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="/dashboardFrontend/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="/dashboardFrontend/plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="/dashboardFrontend/css/style.css">
</head>
<body>

<div class="trending-bar-dark bg-blue hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="trending-bar-title">Trending News</h3>
                <div class="trending-news-slider">
                    <div class="item">
                        <div class="post-content">
                            <h2 class="post-title title-sm">
                                <a href="single-post.html">Ex-Googler warns coding bootcamps are lacking</a>
                            </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-content">
                            <h2 class="post-title title-sm">
                                <a href="single-post.html">Intel’s new smart glasses actually look good</a>
                            </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-content">
                            <h2 class="post-title title-sm">
                                <a href="single-post.html" >Here's How To Get Free Pizza On 2 hour</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12 top-nav-social-lists text-lg-right col-lg-4 ml-lg-auto">
                <ul class="list-unstyled mt-4 mt-lg-0">
                    <li>
                        <a href="https://www.facebook.com/rohim48179">
                            <span class="social-icon">
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                        <a href="https://www.linkedin.com/in/rohim48">
                            <span class="social-icon">
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                        <a href="https://www.github.com/itsarchi">
                            <span class="social-icon">
                                <i class="fa fa-github"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="social-icon">
                                <i class="fa fa-reddit-alien"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<header class="header-navigation d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="/image/logoLong.JPG" alt=""> 
                    </a>
                </div>
                <!-- End Logo -->
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="top-ad-banner float-right">
                    <a href="#">
                        <img src="/dashboardFrontend/images/news/ad-pro.png" class="img-fluid" alt="banner-ads">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="main-navbar clearfix bg-blue ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                      <a class="navbar-brand d-lg-none" href="index.html">
                        <img src="/dashboardFrontend/images/logos/footer-logo.png" alt=""> 
                     </a>
  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                  </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/category/1">Sport</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/category/2">Investment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/category/3">Culinary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/category/4">Music</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/category/5">Property</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="newsIndex">News Index</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/read-later">News Saved</a>
                            </li>
                        </ul>
                        <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <form class="site-search" method="get">
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>

<div class="py-30"></div>

@yield('content')

<div class="py-40"></div>

<footer class="footer footer-main ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 col-lg-6 text-center">
                <a href="index.html"><img src="/image/logoLong.JPG" alt="" class="img-fluid"></a>
                <p class="mt-4">We perfectly balances the simplicity of a clean, eye-catching blog with the flexibility to create unique page layouts.</p>

                <ul class="list-inline footer-social">
                    <li class="li list-inline-item"><a href="https://www.facebook.com/rohim48179"><i class="fa fa-facebook"></i></a></li>
                    <li class="li list-inline-item"><a href="https://www.linkedin.com/in/rohim48"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <div class="copyright-text text-center">
                    <p class="mb-0">© All Copyright Reserved to - <a href="https://themefisher.com/" target="_blank">Noer Rohim</a></p>
                </div>
            </div>

            <div class="scroll-to-top">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
        </div>
    </div>
</footer>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="/dashboardFrontend/plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="/dashboardFrontend/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="/dashboardFrontend/plugins/slick-carousel/slick.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="/dashboardFrontend/plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="/dashboardFrontend/js/custom.js"></script>

</body>
</html>
