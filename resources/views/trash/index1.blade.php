<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Блог</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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

</head>

<body>

	<div class="body">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0 ">
				<!-- <div class="header-top header-top-default border-bottom-0 bg-color-primary">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item">
													<span class="text-light opacity-7 pl-0">Call Us Today! 800-123-4567</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0 text-light opacity-7" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link text-light opacity-7 pr-0" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				<div class="header-container container p-0">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo" style="margin-left: 1px;">
									<a href="/">
										<img alt="Porto" width="200" height="60" data-sticky-width="170" data-sticky-height="45" src="img/logo/LogoBlack.png">
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
													<a class="dropdown-item dropdown-toggle text-3 text-uppercase" href="#">
														<!-- <img class="border" alt="Avatar" width="30" height="20" src="img/test/Flag_of_Russia.png"> -->
														RU
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#" title="@if (Auth::user()){{ Auth::user()->name }}@elseАвторизуйся@endif">
														<img alt="Avatar" width="17" height="17" src="@if (Auth::user())storage/{{ Auth::user()->avatar }}@else img/elements/avatar.png @endif">
													</a>
												</li>

											</ul>
										</nav>
									</div>

								</div>
								<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-2 order-lg-2">
									<div class="header-nav-feature header-nav-features-search d-inline-flex" style="margin-right: 4px">
										<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
										<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
											<form role="search" action="page-search-results.html" method="get">
												<div class="simple-search input-group">
													<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
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

		<div role="main" class="main blog-bg">



			<div class="container py-2 mt-4">

				<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
				 data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
					<li class="nav-item active" data-option-value="*"><a class="nav-link text-3 text-uppercase active" href="#">Управление</a></li>
					<li class="nav-item" data-option-value=".websites"><a class="nav-link text-3 text-uppercase" href="#">Персонал</a></li>
					<li class="nav-item" data-option-value=".logos"><a class="nav-link text-3 text-uppercase" href="#">Маркетинг и PR</a></li>
					<li class="nav-item" data-option-value=".brands"><a class="nav-link text-3 text-uppercase" href="#">Финансы</a></li>
					<li class="nav-item" data-option-value=".medias"><a class="nav-link text-3 text-uppercase" href="#">Улучшения</a></li>
				</ul>

				<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
					<div class="row portfolio-list sort-destination" data-sort-id="portfolio">

						<div class="col-md-6 col-lg-4 isotope-item p-1 brands">
							<div class="portfolio-item">
								<a href="http://the-founders.blog/post004">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img4.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Работа руководителя</span>
											</span>

											<span class="thumb-info-icons">
												<img src="img/elements/img_text.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 isotope-item p-1 medias">
							<div class="portfolio-item">
								<a href="http://the-founders.blog/post001">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img1.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Источник жизни</span>
											</span>
											<span class="thumb-info-icons">
												<img src="img/elements/img_text.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 isotope-item p-1 websites">
							<div class="portfolio-item">
								<a href="http://the-founders.blog/post002">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img2.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Секрет успеха</span>
											</span>
											<span class="thumb-info-icons">
												<img src="img/elements/img_text.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 isotope-item p-1 logos">
							<div class="portfolio-item">
								<a href="http://the-founders.blog/post003">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img3.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Кто Ваши сотрудники?</span>
											</span>
											<span class="thumb-info-icons">
												<img src="img/elements/img_text.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 isotope-item p-1 logos">
							<div class="portfolio-item">
								<a href="http://the-founders.blog/post005">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img5.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Навыки директора</span>
											</span>
											<span class="thumb-info-icons">
												<img src="img/elements/img_text.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 isotope-item p-1 logos">
							<div class="portfolio-item">
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/test/blog_img5.png" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="text-white font-weight-light font-roboto-slab-blog">Видюшка</span>
											</span>
											<span class="thumb-info-icons">
												<img src="img/elements/img_video.png" alt="">
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<!-- Модальное окно -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
						 	aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body p-0">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<div>
											<div id="player1"></div>
										</div>
									</div>
								</div>
							</div>
						</div>



					</div>
				</div>

			</div>

		</div>

		<footer id="footer">
			<div class="container p-0">

				<div class="footer-copyright">
					<div class="container p-0">
						<div class="row py-4">
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="/" class="logo pr-0 pr-lg-3">
									<img alt="Porto Website Template" src="img/logo/LogoWhite.png" class="opacity-6" height="50">
								</a>
							</div>

							<!-- <div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
											<p>© Copyright 2018. Все права защищены.</p>
									</div> -->

							<div class="col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-center">
								<nav id="sub-menu">
									<ul>
										<!-- <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> Реквизиты</a></li> -->
										<li><a href="_index_offer.html" class="ml-1 text-decoration-none">Договор-оферта и политика
												конфиденциальности</a></li>
										<!-- <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li> -->
									</ul>
								</nav>
							</div>

							<div class="col-md-2 col-lg-3 d-flex align-items-end justify-content-end justify-content-lg-end">
								<!-- <h5 class="text-3 mb-3">FOLLOW US</h5> -->
								<ul class="social-icons">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-youtube"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-youtube"></i></a></li>
									<li class="social-icons-instagram"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
											 class="fab fa-instagram"></i></a></li>
									<li class="social-icons-vk"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-vk"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</footer>
	</div>



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
	<script src="js/playerjs.js" type="text/javascript"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

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

<script>
	var player = new Playerjs({
		id: "player1",
		file: "video/rocks.mp4"
	});

	function autoPlayYouTubeModal() {
		var trigger = $("body").find('[data-toggle="modal"]');
		trigger.click(function () {
			var theModal = $(this).data("target"),
				videoSRC = $(this).attr("data-theVideo"),
				videoSRCauto = videoSRC + "?autoplay=1";
			$(theModal + ' iframe').attr('src', videoSRCauto);
			$(theModal + ' button.close').click(function () {
				$(theModal + ' iframe').attr('src', videoSRC);
			});
		});
	}

	$(document).ready(function () {
		autoPlayYouTubeModal();
	});
</script>

</html>