<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Блог-пост тест</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body>

<div class="body">


    <header id="header" class="header-effect-shrink header-body"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 ">

            <div class="header-container container ">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo" style="margin-left: -18px">
                                <a href="/">
                                    <img alt="Logo" width="200" height="60" data-sticky-width="200"
                                         data-sticky-height="60" src="img/logo/LogoBlack.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-1 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">

                                            </li>

                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-2 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i
                                                class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q"
                                                       type="search" value="" placeholder="Search...">
                                                <span class="input-group-append">
														<button class="btn" type="submit">
															<i class="fa fa-search header-nav-top-icon"></i>
														</button>
													</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>


</div>

<footer id="footer">
    <div class="container p-0">

        <div class="footer-copyright">
            <div class="container p-0">
                <div class="row py-4">
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="/" class="logo pr-0 pr-lg-3">
                            <img alt="Porto Website Template" src="img/logo/LogoWhite.png" class="opacity-6"
                                 height="50">
                        </a>
                    </div>

                    <!-- <div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                <p>© Copyright 2018. Все права защищены.</p>
                        </div> -->

                    <div class="col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-center">
                        <nav id="sub-menu">
                            <ul>
                                <!-- <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> Реквизиты</a></li> -->
                                <li><a href="/offer" class="ml-1 text-decoration-none">Договор-оферта и политика
                                        конфиденциальности</a></li>
                                <!-- <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li> -->
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-2 col-lg-3 d-flex align-items-center justify-content-end justify-content-lg-end">
                        <!-- <h5 class="text-3 mb-3">FOLLOW US</h5> -->
                        <ul class="social-icons pr-3">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                                                 title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-youtube"><a href="http://www.twitter.com/" target="_blank"
                                                                title="Twitter"><i class="fab fa-youtube"></i></a></li>
                            <li class="social-icons-instagram"><a href="http://www.linkedin.com/" target="_blank"
                                                                  title="Linkedin"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-vk"><a href="http://www.linkedin.com/" target="_blank"
                                                           title="Linkedin"><i class="fab fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/jquery.vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>
<script src="vendor/instafeed/instafeed.min.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<!-- Examples -->
<script src="js/examples/examples.instafeed.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-12345678-1', 'auto');
        ga('send', 'pageview');
    </script>
     -->

</body>

</html>