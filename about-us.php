<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Hotel Finder - About Us</title>

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

	<link href="css/select-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="single">
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
							<li class="active">
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
									<li><a href="search-rooms.php">Search Rooms</a></li>
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
		<div class="htlfndr-about-us">	
			<main id="htlfndr-main-content" class=" htlfndr-main-content" role="main">	
			<article>
				<div class="h5 text-center text-uppercase">About us</div>
				<h1 class="text-center">What We Do Everyday</h1>
				<div class="htlfndr-section-under-title-line"></div>
				<div class="htlfndr-text">
					<p>Neque cursus curae ante scelerisque vehicula porttitor natoque risus vitae lacinia felis elit netus sed iaculis</p>
					<p>	interdum nullam sem habitasse vulputate reetturpis fringilla duis suspendisse arcu</p>
					<p>Ullamcorper scelerisque elit quam dignissim velit lacus urna quam interdum quisque bibendum platea iaculis</p>
					<p> blandit dapibus non natoque purus pellentesque</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas iaculis mauris nec lacus suscipit, et gravida </p>
					<p>magna volutpat. Nullam consequat rhoncus lacinia. Ut rhoncus velit ut sem elementum porttitor. </p>
				</div>
			</article>	
			<article class="htlfndr-creative-team">
				<div class="htlfndr-video-block">
					<img src="http://placehold.it/1024x420" alt="">
					<div class="htlfndr-video-title">
						<div class="htlfndr-button-play"></div>
						<p class="htlfndr-title-first"><b>Work hard. Travel simple.</b></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
				<p class="text-center htlfndr-font-24"><i class="fa fa-users"></i></p>	
				<h1 class="text-center">Out Creative Team</h1>
				<hr>
				<p class="small text-center">Neque cursus curae ante scelerisque vehicula porttitor natoque risus vitae lacinia felis elit</p>
				<p class="small text-center">netus sed iaculis interdum nullam sem habitasse vulputate laoreet turpis fringilla duis suspendisse arcu</p>
				<div class="row container">
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="htlfndr-user-person-navigation">
								<div class="htlfndr-user-avatar">
									<img alt="user avatar" src="http://placehold.it/125x120">
								</div>
							<h3 class="htlfndr-user-name">john brown</h3>
							<h6 class="htlfndr-user-membership">director</h6>
							<p class="text-center">Neque cursus curae ante scelei que vehicula porttitor natoque risus vitae lacinia felis elit netu</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="htlfndr-user-person-navigation">
								<div class="htlfndr-user-avatar">
									<img alt="user avatar" src="http://placehold.it/125x120">
								</div>
							<h3 class="htlfndr-user-name">sara smith</h3>
							<h6 class="htlfndr-user-membership">director</h6>
							<p class="text-center">Neque cursus curae ante scelei que vehicula porttitor natoque risus vitae lacinia felis elit netu</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="htlfndr-user-person-navigation">
								<div class="htlfndr-user-avatar">
									<img alt="user avatar" src="http://placehold.it/125x120">
								</div>
							<h3 class="htlfndr-user-name">david jacson</h3>
							<h6 class="htlfndr-user-membership">founder & Director</h6>
							<p class="text-center">Neque cursus curae ante scelei que vehicula porttitor natoque risus vitae lacinia felis elit netu</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="htlfndr-user-person-navigation">
								<div class="htlfndr-user-avatar">
									<img alt="user avatar" src="http://placehold.it/125x120">
								</div>
							<h3 class="htlfndr-user-name">Anna Pedersen</h3>
							<h6 class="htlfndr-user-membership">CHIEF OPERATING OFFICER</h6>
							<p class="text-center">Neque cursus curae ante scelei que vehicula porttitor natoque risus vitae lacinia felis elit netu</p>
						</div>
					</div>
				</div>
			</article>
			<article class="htlfndr-contact container">	
				<h1 class="text-center">Want to become Part of our Team?</h1>
				<p class="text-center htlfndr-slogan">We are looking just for you!</p>
				<p class="text-center htlfndr-font-24">
					<i class="fa fa-paper-plane"></i>
					</p>
				<p class="text-center"><a class="btn-default" href="contact-us.php#htlfndr-contact-us">Contact Us</a></p>
			</article>		

			</main>

		</div><!-- .row .htlfndr-elements-content -->
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
										<li class="menu-item active"><a href="about-us.php">about</a></li>
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
									<form>
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
		 <script src="js/jquery.responsiveTabs.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Include Touch Menu Hover script file -->
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include Owl Carousel script file -->
<script src="js/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/jquery.custom-select.js"></script>
<!-- Include main script file -->
<script src="js/script.js"></script>

<!--<script src="js/less.min.js" ></script> -->
</body>
</html>