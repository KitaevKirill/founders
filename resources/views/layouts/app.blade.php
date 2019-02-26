<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Блог</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"> -->

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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

    <!-- fancyBox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 ">
            <div class="header-container container p-0" style="height: 60px">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
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
                                <div style="height: 100%">
                                    <nav style="height: 100%">
                                        {{--<div  style="height:100%; float: left; display: table; margin-right: 10px">--}}
                                        {{--<a style="display: table-cell; vertical-align: middle; text-transform: uppercase" href="http://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--{{App::getLocale()}}--}}
                                        {{--</a>--}}
                                        <div style="height:100%; float: left; display: table;  margin-right: 20px">
                                            <div style="display: table-cell; vertical-align: middle">
                                                <button type="button"
                                                        style="border: white; background: white; outline-color: #212529;"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    {{App::getLocale()}}
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="/locale/ru">ru</a>
                                                    <a class="dropdown-item" href="/locale/en">en</a>
                                                </div>
                                            </div>


                                        </div>

                                        <div style="height:100%; float: right; display: table">
                                            <a style="display: table-cell; vertical-align: middle" id="navbarDropdown"
                                               class="nav-link dropdown-toggle" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>

                                        <div style="height:100%; float: right; display: table; ">
                                            <a style="display: table-cell; vertical-align: middle"
                                               @if (Auth::user())href="/usersettings"
                                               title={{ Auth::user()->name }} @else href="/home"
                                               title="Авторизоваться" @endif>
                                                <img alt="Avatar" width="27" height="27"
                                                     src="@if (Auth::user() && (file_exists(public_path() . '/storage/avatar/' . Auth::user()->id . '/Min.png')))storage/avatar/{{ Auth::user()->id }}/Min.png @else img/elements/avatar.png @endif">
                                            </a>
                                        </div>


                                    </nav>
                                </div>

                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-2 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex"
                                     style="margin-right: 4px">
                                    <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i
                                                class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q"
                                                       type="search" value="" placeholder="Поиск...">
                                                <span class="input-group-append">
														<button class="btn" type="submit">
															<!-- <i class="fa fa-search header-nav-top-icon"></i> -->
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

    <main class="py-4">
        <div style="margin-left: 10%; margin-right: 10%">
            @yield('content')
        </div>
    </main>

</div>

</body>
</html>
