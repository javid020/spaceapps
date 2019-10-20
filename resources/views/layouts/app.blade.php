<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <!-- Page Title -->
    <title>SpaceSetup* - SpaceApps</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('tmp/images/favicon.png') }} " rel="shortcut icon" type="image/png">
    <link href="{{ asset('tmp/images/apple-touch-icon.png') }} " rel="icon">
    <link href="{{ asset('tmp/images/apple-touch-icon-72x72.png') }} " rel="icon" sizes="72x72">
    <link href="{{ asset('tmp/images/apple-touch-icon-114x114.png') }} " rel="icon" sizes="114x114">
    <link href="{{ asset('tmp/images/apple-touch-icon-144x144.png') }} " rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('tmp/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('tmp/css/jquery-ui.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('tmp/css/animate.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('tmp/css/css-plugin-collections.css') }} " rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('tmp/css/menuzord-skins/menuzord-rounded-boxed.css') }} " rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('tmp/css/style-main.css') }} " rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('tmp/css/preloader.css') }} " rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('tmp/css/custom-bootstrap-margin-padding.css') }} " rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('tmp/css/responsive.css') }} " rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{ asset('tmp/css/style.css') }} " rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{ asset('tmp/js/revolution-slider/css/settings.css') }} " rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('tmp/js/revolution-slider/css/layers.css') }} " rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('tmp/js/revolution-slider/css/navigation.css') }} " rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{ asset('tmp/css/colors/theme-skin-green.css') }} " rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('tmp/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('tmp/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('tmp/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('tmp/js/jquery-plugin-collection.js') }}"></script>
    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('tmp/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('tmp/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord default">
                        <a style="margin-top: 0px;" class="menuzord-brand pull-left flip xs-pull-center" href="{{ route('homepage') }}">
                            <h2>SpaceSetup*</h2>
                        </a>
                        <ul class="menuzord-menu onepage-nav ">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#causes">Causes</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#team">Volunteer</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
        @yield('content')
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="{{ asset('tmp/images/footer-bg.png') }} " data-bg-color="#25272e">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h2 style="color:white;">SpaceSetup*</h2>
                        <p class="mb-0">Some Address</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
                        </ul>
                        <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-5">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Latest News</h5>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="/tmp/images/blog/ln1.jpg"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="/tmp/images/blog/ln2.jpg"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="/tmp/images/blog/ln3.jpg"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Useful Links</h5>
                        <ul class="list angle-double-right list-border">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Campaign</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                        <div id="flickr-feed" class="clearfix">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-15 pb-10">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0 sm-text-center">Copyright &copy;2019 All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('tmp/js/custom.js') }}"></script>


<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tmp/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

</body>
</html>