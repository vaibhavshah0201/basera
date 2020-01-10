<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Hotel Finder - Search Rooms</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<!-- Main styles -->
	<link href="css/style.css" rel="stylesheet" />
	<!--<link rel="stylesheet/less" href="css/style.less" />-->
	<!-- IE styles -->
	<link href="css/ie.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<!-- Jquery UI -->
	<link href="css/jquery-ui.css" rel="stylesheet" />
	<!-- OWL Carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- Overlay preloader-->
<div class="htlfndr-loader-overlay"></div>

<div class="htlfndr-wrapper">
	<header>
		<div class="htlfndr-top-header">
			<div class="navbar navbar-default htlfndr-blue-hover-nav">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#htlfndr-first-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="htlfndr-logo navbar-brand" href="index.php">
							<img src="images/logo.png" alt="Logo" />
							<p class="htlfndr-logo-text">hotel <span>finder</span></p>
						</a>
					</div><!-- .navbar-header -->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="htlfndr-first-nav">
						<!-- List with sing up/sing in links -->
						<ul class="nav navbar-nav htlfndr-singup-block">
							<li id="htlfndr-singup-link">
								<a href="#" data-toggle="modal" data-target="#htlfndr-sing-up"><span>sing up</span></a>
							</li>
							<li id="htlfndr-singin-link">
								<a href="#" data-toggle="modal" data-target="#htlfndr-sing-in"><span>sing in</span></a>
							</li>
						</ul><!-- .htlfndr-singup-block -->
						<!-- List with currency and language dropdowns -->
						<ul class="nav navbar-nav htlfndr-custom-select htlfndr-currency">
							<li>
								<label for="htlfndr-currency" class="sr-only">Change currency</label>
								<select name="htlfndr-currency" id="htlfndr-currency" tabindex="-1">
									<option value="eur">eur</option>
									<option value="gbp">gbp</option>
									<option value="jpy">jpy</option>
									<option value="usd" selected="selected">usd</option>
								</select>
							</li>
						</ul>
						<ul class="nav navbar-nav htlfndr-custom-select htlfndr-language">
							<li id="htlfndr-dropdown-language">
								<label for="htlfndr-language" class="sr-only">Change language</label>
								<select name="htlfndr-language" id="htlfndr-language" tabindex="-1">
									<option value="eng" selected="selected">eng</option>
									<option value="ger">ger</option>
									<option value="jap">jap</option>
									<option value="ita">ita</option>
									<option value="fre">fre</option>
									<option value="rus" >rus</option>
								</select>
							</li>
						</ul><!-- .htlfndr-top-menu-dropdowns -->
					</div><!-- .collapse.navbar-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar.navbar-default.htlfndr-blue-hover-nav-->
		</div><!-- .htlfndr-top-header -->
		<!-- Start of main navigation -->
		<div class="htlfndr-under-header">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#htlfndr-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!-- .navbar-header -->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="htlfndr-main-nav">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.php">home</a>
							</li>
							<li><a href="elements.php">elements</a></li>
							<li>
								<a href="blog-index.php">blog</a>
							</li>
							<li>
								<a href="about-us.php">about</a>
							</li>
							<li>
								<a href="user-page.php">user profile</a>
							</li>
							<li  class="dropdown">
								<a href="#" onclick="return false;">Pages</a>
								<ul class="dropdown-menu">
									<li  class="dropdown-submenu"><a href="search-result.php">Search result</a>
										<ul class="dropdown-menu">
											<li><a href="search-result.php">Search result 1</a>
											<li><a href="search-result-v-2.php">Search result 2</a></li>
											<li><a href="search-result-v-3.php">Search result 3</a></li>
										</ul>
									</li>
									<li  class="dropdown-submenu"><a href="hotel-page-v1.php">Hotel page</a>
										<ul class="dropdown-menu">
											<li><a href="hotel-page-v1.php">Hotel page 1</a>
											<li><a href="hotel-page-v2.php">Hotel page 1 Special offer</a></li>
											<li><a href="hotel-page-v3.php">Hotel page 2</a></li>
											<li><a href="hotel-page-v4.php">Hotel page 2 Special offer</a></li>
										</ul>
									</li>	
									<li class="dropdown-submenu"><a href="hotel-room-page.php">Hotel Room Page</a>
										<ul class="dropdown-menu">
											<li><a href="hotel-room-page.php">Hotel Room Page</a>
											<li><a href="hotel-room-page-special-offer.php">Hotel Room Page Special offer</a></li>
										</ul>
									</li>
									<li><a href="payment.php">Payment</a></li>
									<li class="active"><a href="search-rooms.php">Search Rooms</a></li>
									<li><a href="contact-us.php">Contact Us</a></li>
									<li><a href="thanks-page.php">Thanks Page</a></li>											
									<li><a href="404-page.php">404 Page</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- .collapse.navbar-collapse -->
				</div><!-- .container -->
			</nav><!-- .navbar.navbar-default.htlfndr-blue-hover-nav -->
		</div><!-- .htlfndr-under-header -->
		<!-- End of main navigation -->
		<noscript><h2>You have JavaScript disabled!</h2></noscript>
	</header>

	<!-- Start of main content -->
	<div class="container">
		<!-- Progress steps -->
		<div class="htlfndr-steps">
			<ul class="htlfndr-progress">
				<li><a href="search-result.php">
						<span class="htlfndr-step-number">1</span> <span class="htlfndr-step-description">results</span></a>
					</li>
					<li class="htlfndr-active-step">
						<span class="htlfndr-step-number">2</span> <span class="htlfndr-step-description">hotel</span>
					</li>
					<li>
						<span class="htlfndr-step-number">3</span> <span class="htlfndr-step-description">room</span>
					</li>
					<li>
						<span class="htlfndr-step-number">4</span> <span class="htlfndr-step-description">payment</span>
					</li>
			</ul>
		</div><!-- .htlfndr-steps -->

		<div class="row htlfndr-room-page htlfndr-search-rooms">
			<main id="htlfndr-main-content" class="col-sm-12 col-md-9 col-lg-9 htlfndr-search-result htlfndr-grid-view" role="main">
				<h2 class="htlfndr-search-result-title"><span>125</span> available rooms found</h2>
				<h4 class="htlfndr-hotel-title"><a href="hotel-page-v1.php">/Hilton Hotel</a></h4>
				<!-- Sorting navigation section -->
				<div class="htlfndr-search-result-sorting row">
					<div class="col-md-12">
						<!-- Sort number hotels to show -->
						<div class="dropdown htlfndr-show-number-hotels">
							<a class="dropdown-toggle" id="htlfndr-sort-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">
								Show <span>9 items</span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="htlfndr-sort-2">
								<li><a href="#" id="htlfndr-show-9" data-number="9">9 items</a></li>
								<li><a href="#" id="htlfndr-show-18" data-number="18">18 items</a></li>
								<li><a href="#" id="htlfndr-show-27" data-number="27">27 items</a></li>
							</ul>
						</div><!-- .dropdown .htlfndr-show-number-hotels -->

						<!-- Change view buttons -->
						<div class="htlfndr-view">
							<button id="htlfndr-grid" class="htlfndr-active" data-toggle="tooltip" data-placement="top" title="Grid view" role="button">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</button>
							<button id="htlfndr-row" data-toggle="tooltip" data-placement="top" title="Row view" role="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div><!-- .htlfndr-view -->

					</div><!-- .col-md-12 -->
				</div><!-- .htlfndr-search-result-sorting .row -->

				<section class="row htlfndr-search-result-content">
					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Twin Room</a></h2>
									<div class="htlfndr-rating-stars" data-rating="5">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<p class="htlfndr-hotel-reviews">(<span>188</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 100</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Classic Room</a></h2>
									<div class="htlfndr-rating-stars" data-rating="4">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star"></i>
										<p class="htlfndr-hotel-reviews">(<span>128</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>paris france</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 250</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post special-offer">
							<a href="hotel-room-page-special-offer.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Family Suite</a></h2>
									<div class="htlfndr-rating-stars" data-rating="3">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<p class="htlfndr-hotel-reviews">(<span>118</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page-special-offer.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 280</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">King Family Suite</a></h2>
									<div class="htlfndr-rating-stars" data-rating="4">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star"></i>
										<p class="htlfndr-hotel-reviews">(<span>88</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 200</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Twin Room</a></h2>
									<div class="htlfndr-rating-stars" data-rating="5">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<p class="htlfndr-hotel-reviews">(<span>178</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>paris france</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 250</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Classic Room</a></h2>
									<div class="htlfndr-rating-stars" data-rating="3">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<p class="htlfndr-hotel-reviews">(<span>177</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 300</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Family Suite</a></h2>
									<div class="htlfndr-rating-stars" data-rating="5">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<p class="htlfndr-hotel-reviews">(<span>181</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 200</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post">
							<a href="hotel-room-page.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">King Family Suite</a></h2>
									<div class="htlfndr-rating-stars" data-rating="5">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<p class="htlfndr-hotel-reviews">(<span>98</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="#"><i class="fa fa-map-marker"></i>paris france</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 300</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4.htlfndr-hotel-post-wrapper -->

					<div class="col-md-4 htlfndr-hotel-post-wrapper">
						<div class="htlfndr-hotel-post special-offer">
							<a href="hotel-room-page-special-offer.php" class="htlfndr-hotel-thumbnail">
								<img src="http://placehold.it/260x155" alt="pic" />
							</a>
							<div class="htlfndr-hotel-description">
								<div class="htlfndr-description-content">
									<h2 class="htlfndr-entry-title"><a href="hotel-room-page.php">Twin Room</a></h2>
									<div class="htlfndr-rating-stars" data-rating="3">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<p class="htlfndr-hotel-reviews">(<span>198</span> reviews)</p>
									</div><!-- .htlfndr-rating-stars -->
									<h5 class="htlfndr-hotel-location"><a href="hotel-room-page-special-offer.php">san francisco united states</a></h5>
									<p class="htlfndr-last-booking">Last booking: <span>14</span> hours ago</p>
								</div><!-- .htlfndr-description-content -->
								<a href="hotel-room-page.php" role="button" class="htlfndr-select-hotel-button">select</a>
								<div class="htlfndr-hotel-price">
									<span class="htlfndr-cost">$ 300</span> <span class="htlfndr-per-night">per night</span>
								</div><!-- .htlfndr-hotel-price -->
							</div><!-- .htlfndr-hotel-description -->
						</div><!-- .htlfndr-hotel-post -->
					</div><!-- .col-md-4  .htlfndr-hotel-post-wrapper-->
				</section><!-- .row .htlfndr-search-result-content -->

				<!-- Pagination -->
				<nav class="htlfndr-pagination">
					<ul class="pagination">
						<li class="htlfndr-left">
							<a href="#" aria-label="Previous">
								<span aria-hidden="true" class="fa fa-angle-left"></span>
							</a>
						</li>
						<li class="current"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="htlfndr-right">
							<a href="#" aria-label="Next">
								<span aria-hidden="true" class="fa fa-angle-right"></span>
							</a>
						</li>
					</ul>
				</nav><!-- .htlfndr-pagination -->
			</main><!-- .htlfndr-search-result -->

			<aside id="htlfndr-right-sidebar" class="col-sm-12 col-md-3 col-lg-3 htlfndr-sidebar htlfndr-sidebar-in-right" role="complementary">
				<div class="widget htlfndr-hotel-visit-card htlfndr-modify-search-aside">
					<div class="htlfndr-widget-main-content htlfndr-widget-padding">
						<div class="htlfndr-hotel-logo">
							<img src="http://placehold.it/105x75" alt="Hotel logo" />
						</div><!-- .htlfndr-hotel-logo -->

						<form name="search-hotel" id="search-hotel">
							<div class="htlfndr-float-input first-float">
								<label for="htlfndr-date-in" class="htlfndr-input-label">Check in</label>
								<div id="htlfndr-input-date-in" class="htlfndr-input-wrapper">
									<input type="text" name="htlfndr-date-in" id="htlfndr-date-in" class="search-hotel-input"/>
									<button type="button" class="htlfndr-clear-datepicker"></button>
								</div><!-- #htlfndr-input-date-in.htlfndr-input-wrapper -->
							</div><!-- .htlfndr-float-input -->

							<div class="htlfndr-float-input">
								<label for="htlfndr-date-out" class="htlfndr-input-label">Check out</label>
								<div id="htlfndr-input-date-out" class="htlfndr-input-wrapper">
									<input type="text" name="htlfndr-date-out" id="htlfndr-date-out" class="search-hotel-input"/>
									<button type="button" class="htlfndr-clear-datepicker"></button>
								</div><!-- #htlfndr-input-date-out.htlfndr-input-wrapper -->
							</div><!-- .htlfndr-float-input -->

							<!-- Section with selects -->
							<section class="htlfndr-select-block">
								<div class="htlfndr-input-wrapper htlfndr-small-select">
									<label for="htlfndr-room" class="htlfndr-input-label">Room</label>
									<select name="htlfndr-room" id="htlfndr-room" class="htlfndr-dropdown">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div><!-- .htlfndr-input-wrapper .htlfndr-small-select -->

								<div class="htlfndr-input-wrapper htlfndr-small-select">
									<label for="htlfndr-adult" class="htlfndr-input-label">Adult</label>
									<select name="htlfndr-adult" id="htlfndr-adult" class="htlfndr-dropdown">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div><!-- .htlfndr-input-wrapper .htlfndr-small-select -->

								<div class="htlfndr-input-wrapper htlfndr-small-select">
									<label for="htlfndr-kids" class="htlfndr-input-label">Kids</label>
									<select name="htlfndr-kids" id="htlfndr-kids" class="htlfndr-dropdown">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div><!-- .htlfndr-input-wrapper .htlfndr-small-select -->
							</section>
							<div class="clearfix"></div>
							<input type="submit" value="search"/>
						</form>
					</div><!-- .htlfndr-widget-main-content -->
				</div><!-- .widget .htlfndr-hotel-visit-card -->
				<div class="widget htlfndr-widget-help">
					<div class="htlfndr-widget-main-content htlfndr-widget-padding">
						<h3 class="widget-title">need our help</h3>
						<span>24/7 dedicated customer support</span>
						<p class="htlfndr-phone">+(000) 000-000-000</p>
						<p class="htlfndr-mail">support@bestwebsoft.zendesk.com</p>
					</div><!-- .htlfndr-widget-main-content .htlfndr-widget-padding -->
				</div><!-- .widget .htlfndr-widget-help -->
			</aside><!-- .htlfndr-sidebar-in-right -->
		</div><!-- .row -->
	</div><!-- .container -->
	<!-- End of main content -->

	<!-- Start of the Footer -->
	<footer class="htlfndr-footer">

		<button class="htlfndr-button-to-top" role="button"><span>Back to top</span></button><!-- Button "To top" -->

		<div class="widget-wrapper">
			<div class="container">
				<div class="row">
					<aside class="col-xs-12 col-sm-6 col-md-3 htlfndr-widget-column">
						<div class="widget">
							<a class="htlfndr-logo navbar-brand" href="#">
								<img src="images/logo.png" height="20" width="30" alt="Logo" />
								<p class="htlfndr-logo-text">hotel <span>finder</span></p>
							</a>
							<hr />
							<p>Suspendisse sed sollicitudin nisl, at dignissim libero. Sed porta tincidunt ipsum, vel volutpat.</p>
							<br />
							<p>Nunc ut fringilla urna. Cras vel adipiscing ipsum. Integer dignissim nisl eu lacus interdum facilisis. Aliquam erat volutpat. Nulla</p>
						</div><!-- .widget -->
					</aside><!-- .col-xs-12.col-sm-6.col-md-3.htlfndr-widget-column -->
					<aside class="col-xs-12 col-sm-6 col-md-3 htlfndr-widget-column">
						<div class="widget">
							<h3 class="widget-title">contact info</h3>
							<h5>address</h5>
							<p>Hotel Finder	<br />120 CA 15th Avenue-Suite 214, USA</p>
							<hr />
							<h5>phone number</h5>
							<p>1-555-5555-5555</p>
							<hr />
							<h5>email address</h5>
							<p>support@bestwebsoft.zendesk.com.com</p>
						</div><!-- .widget -->
					</aside><!-- .col-xs-12.col-sm-6.col-md-3.htlfndr-widget-column -->
					<aside class="col-xs-12 col-sm-6 col-md-3 htlfndr-widget-column">
						<div class="widget">
							<h3 class="widget-title">pages</h3>
							<ul class="menu">
								<li class="menu-item"><a href="index.php">home</a></li>
								<li class="menu-item"><a href="elements.php">elements</a></li>
								<li class="menu-item"><a href="blog-index.php">blog</a></li>
								<li class="menu-item"><a href="about-us.php">about</a></li>
								<li class="menu-item"><a href="user-page.php">user profile</a></li>
							</ul>
						</div><!-- .widget -->
					</aside><!-- .col-xs-12.col-sm-6.col-md-3.htlfndr-widget-column -->
					<aside class="col-xs-12 col-sm-6 col-md-3 htlfndr-widget-column">
						<div class="widget">
							<h3 class="widget-title">follow us</h3>
							<!-- Start of Follow Us buttons -->
							<div class="htlfndr-follow-plugin">
								<a href="https://www.facebook.com/bestwebsoft/" target="_blank" class="htlfndr-follow-button button-facebook"></a>
								<a href="https://twitter.com/bestwebsoft" target="_blank" class="htlfndr-follow-button button-twitter"></a>
								<a href="https://plus.google.com/+Bestwebsoft" target="_blank" class="htlfndr-follow-button button-google-plus"></a>
								<a href="https://www.linkedin.com/company/bestwebsoft/" target="_blank" class="htlfndr-follow-button button-linkedin"></a>
								<a href="#" class="htlfndr-follow-button button-pinterest"></a>
								<a href="https://www.youtube.com/bestwebsoft" target="_blank" class="htlfndr-follow-button button-youtube"></a>
							</div><!-- .htlfndr-follow-plugin -->
							<!-- End of Follow Us buttons -->
							<hr />
							<h3 class="widget-title">mailing list</h3>
							<p>Sign up for our mailing list to get latest updates and offers</p>
							<form action="/">
								<input type="email" placeholder="Your E-mail" />
								<input type="submit" />
							</form>
						</div><!-- .widget -->
					</aside><!-- .col-xs-12.col-sm-6.col-md-3.htlfndr-widget-column -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .widget-wrapper -->

		<div class="htlfndr-copyright">
			<div class="container" role="contentinfo">
				<p>Copyright 2017 | BESTWEBSOFT | All Rights Reserved | Designed by BestWebSoft</p>
			</div><!-- .container -->
		</div><!-- .htlfndr-copyright -->
	</footer>
</div><!-- .htlfndr-wrapper -->
<div id="htlfndr-sing-up">
	<div class="htlfndr-content-card">
		<div class="htlfndr-card-title clearfix">
			<h2 class="pull-left">Sing up</h2> 
		</div>
		<form id="htlfndr-sing-up-form" method="post">
			<div class="row">
				<div class="col-md-6">
					<h4>first name</h4>
					<input id="htlfndr-sing-up-name" class="htlfndr-input " type="text" name="htlfndr-sing-up-name">
				</div>
				<div class="col-md-6">
					<h4>last name</h4>
					<input id="htlfndr-sing-up-last-name" class="htlfndr-input " type="text" name="htlfndr-sing-up-last-name">
				</div>
			</div>
			<h4>E-mail adress</h4>
			<input id="htlfndr-sing-up-email" class="htlfndr-input " type="text" name="htlfndr-sing-up-email">
			<h4>Password</h4>
			<input id="htlfndr-sing-up-pass" class="htlfndr-input " type="text" name="htlfndr-sing-up-pass">
			<h4>Confirm Password</h4>
			<input id="htlfndr-sing-up-pass-conf" class="htlfndr-input " type="text" name="htlfndr-sing-up-pass-conf">
			<div class="clearfix">
			<span>Have an Account? 
				<a data-target="#htlfndr-sing-in" data-toggle="modal" href="#">
					<span>Sing in</span>
				</a>
			</span>
			<input type="submit" value="Sing up" class="pull-right">
			</div>
		</form>
	</div>
</div>	
<div id="htlfndr-sing-in">
	<div class="htlfndr-content-card">
		<div class="htlfndr-card-title clearfix">
			<h2 class="pull-left">Sing in</h2> 
		</div>
		<form id="htlfndr-sing-in-form" method="post">
			<h4>E-mail adress</h4>
			<input id="htlfndr-sing-in-email" class="htlfndr-input " type="text" name="htlfndr-sing-in-emal">
			<h4>Password</h4>
			<input id="htlfndr-sing-in-pass" class="htlfndr-input " type="text" name="htlfndr-sing-in-pass">
			<div class="clearfix">
			<span>Don't Have an Account? 
				<a data-target="#htlfndr-sing-up" data-toggle="modal" href="#">
					<span>Sing up</span>
				</a>
			</span>
			<input type="submit" value="Sing in" class="pull-right">
			</div>
		</form>
	</div>
</div>	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include Jquery UI script file -->
<script src="js/jquery-ui.min.js"></script>
<!-- Include Query UI Touch Punch is a small hack that enables the use
		 of touch events on sites using the jQuery UI user interface library. -->
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Include Touch Menu Hover script file -->
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include Owl Carousel script file -->
<script src="js/owl.carousel.min.js"></script>
<!-- Include main script file -->
<script src="js/script.js"></script>

<!--<script src="js/less.min.js" ></script> -->
</body>
</html>