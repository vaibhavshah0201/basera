<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Hotel Finder - Elements</title>

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
							<li class="active"><a href="elements.php">elements</a></li>
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
									<li class="dropdown-submenu"><a href="search-result.php">Search result</a>
										<ul class="dropdown-menu">
											<li><a href="search-result.php">Search result 1</a>
											<li><a href="search-result-v-2.php">Search result 2</a></li>
											<li><a href="search-result-v-3.php">Search result 3</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu"><a href="hotel-page-v1.php">Hotel page</a>
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
	<div class="container">
		<div class="row htlfndr-elements-page">	
			<main id="htlfndr-main-content" class="col-sm-12 col-md-9 col-lg-9 htlfndr-main-content htlfndr-search-result" role="main">	
				<div class="htlfndr-elements-title">
					<h5>shortcodes</h5>
					<h2>Typography</h2>
				</div>
				<div class="htlfndr-elements-content" id="htlfndr-headers">
					<h3 class="htlfndr-font-24"><b>headers</b></h3>
					<h1>h1 Sodales consequat</h1>
					<h2>h2 Bibendum nec mauris vatius</h2>
					<h3>h3 Platea vitae blandit ante</h3>
					<h4>h4 Cum conubla amet mauris</h4>
					<h5>h5 Ipsum nullam congue port</h5>
					<h6>h6 Ut enim ad minim ven</h6>
				</div><!-- headers-->
				<div class="htlfndr-elements-content" id="htlfndr-par">
					<h3 class="htlfndr-font-24"><b>paragraph</b></h3>
					<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est.</p>
					<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
					
				</div><!--  paragraph-->
				<div class="htlfndr-elements-content" id="htlfndr-big-par">
					<h3 class="htlfndr-font-24"><b>big paragraph</b></h3>
					<p class="lead">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est.</p>
					<p class="lead">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
					
				</div><!-- big paragraph-->
				<div class="htlfndr-elements-content" id="htlfndr-small-par">
					<h3 class="htlfndr-font-24"><b>small paragraph</b></h3>
					<p class="small">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est.</p>
					<p class="small">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
					
				</div><!-- small paragraph-->
				<div class="htlfndr-elements-content" id="htlfndr-bloqoute">
					<h3 class="htlfndr-font-24"><b>blockquote</b></h3>
					<blockquote>Quam habitasse odio habitasse ultrices dis varius ultrices imperdiet aliquam aliquam etiam </blockquote>
				</div><!-- blockquote-->
				<div class="htlfndr-elements-content" id="htlfndr-tag">
					<h3 class="htlfndr-font-24"><b>code tag</b></h3>
					<p>You will learn later on in these tests that <code>word-wrap:</code> be your best <code>&lt;strike&gt;</code> friend.</p>
				</div><!-- Code Tag-->
				<div class="htlfndr-elements-content" id="htlfndr-pre-tag">
					<h3 class="htlfndr-font-24"><b>Preformatted Tag</b></h3>
					<p>This tag styles large blocks of code.</p>
						<pre>.post-title {
	margin: 0 0 5px;
	font-weight: bold;
	font-size: 38px;
	line-height: 1.2;
}
					</pre>
				</div><!-- Preformatted Tag-->
				<div class="htlfndr-elements-content"   id="htlfndr-tables">
					<h3 class="htlfndr-font-24"><b>tables</b></h3>
					<table class="table">
						 <thead>
							 <tr>
								<th>Title</th>
								<th>Location</th>
								<th>Order date</th>
								<th>Date of your stay</th>
								<th>Cost</th>
							 </tr>
						 </thead>
						 <tbody>
							<tr>
								<td class="htlfndr-scope-row">Wellington Hotel</td>
								<td data-title="Location">San Fancisco</td>
								<td data-title="Order date">01/01/2014</td>
								<td data-title="Date of your stay">01/05/2014 - 01/15/2014</td>
								<td data-title="Cost">$1280</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Ruzzini Palace Hotelo</td>
								<td data-title="Location">Kiev</td>
								<td data-title="Order date">07/03/2014</td>
								<td data-title="Date of your stay">09/05/2014 -15/05/2014</td>
								<td data-title="Cost">$7498</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Foscari Palace</td>
								<td data-title="Location">Copenhagen</td>
								<td data-title="Order date">23/06/2014</td>
								<td data-title="Date of your stay">14/07/2014 - 28/07/2014</td>
								<td data-title="Cost">$890</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Hilton Hotel</td>
								<td data-title="Location">New York</td>
								<td data-title="Order date">14/09/2014</td>
								<td data-title="Date of your stay">18/09/2014 - 19/10/2014</td>
								<td data-title="Cost">$2453</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Wellington Hotel</td>
								<td data-title="Location">San Fancisco</td>
								<td data-title="Order date">08/04/2014</td>
								<td data-title="Date of your stay">08/08/2014 - 17/09/2014</td>
								<td data-title="Cost">$1653</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Hilton Molino Stucky</td>
								<td data-title="Location">Copenhagen</td>
								<td data-title="Order date">02/09/2014</td>
								<td data-title="Date of your stay">12/06/2014 - 16/06/2014</td>
								<td data-title="Cost">$1280</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Hilton Hotel</td>
								<td data-title="Location">San Fancisco</td>
								<td data-title="Order date">01/01/2014</td>
								<td data-title="Date of your stay">18/09/2014 - 10/10/2014</td>
								<td data-title="Cost">$3615</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Wellington Hotel</td>
								<td data-title="Location">Stockholm</td>
								<td data-title="Order date">01/01/2014</td>
								<td data-title="Date of your stay">08/08/2014 - 17/09/2014</td>
								<td data-title="Cost">$859</td>
							</tr>
							<tr>
								<td class="htlfndr-scope-row">Ruzzini Palace Hotelo</td>
								<td data-title="Location">Kiev</td>
								<td data-title="Order date">23/06/2014</td>
								<td data-title="Date of your stay">09/05/2014 - 15/05/2014</td>
								<td data-title="Cost">$347</td>
							</tr>
						</tbody>
					</table>
				</div><!-- table -->
				<div class="htlfndr-elements-title">
					<h2>Elements</h2>
				</div>
				<div class="htlfndr-elements-content"  id="htlfndr-but">
					<h3 class="htlfndr-font-24"><b>buttons</b></h3>
					<input type="submit" value="Default" class="btn-default">
					<input type="submit" value="Primary" class="btn-primary">
					<input type="submit" value="Sucsess" class="btn-success">
					<input type="submit" value="Info" class="btn-info">
					<input type="submit" value="Warning" class="btn-warning">
					<input type="submit" value="Danger" class="btn-danger">
				</div><!-- buttons -->
				
				<div class="htlfndr-elements-content" id="htlfndr-but-icon">
					<h3 class="htlfndr-font-24"><b>buttons with icon</b></h3>

					<span class="htlfndr-but-icon">
						<input type="submit" value="Default" class="btn-default">
						<span class="fa fa-plane" aria-hidden="true"></span>
					</span>
					<span class="htlfndr-but-icon">
						<input type="submit" value="Primary" class="btn-primary">
						<span class="fa fa-paper-plane" aria-hidden="true"></span>
					</span>
					<span class="htlfndr-but-icon">
						<input type="submit" value="Sucsess" class="btn-success">
						<span class="fa fa-check" aria-hidden="true"></span>
					</span>
					<span class="htlfndr-but-icon">
						<input type="submit" value="Info" class="btn-info">
						<span class="fa fa-info" aria-hidden="true"></span>
					</span>
					<span class="htlfndr-but-icon">
						<input type="submit" value="Warning" class="btn-warning">
						<span class="fa fa-exclamation" aria-hidden="true"></span>
					</span>
					<span class="htlfndr-but-icon">
						<input type="submit" value="Danger" class="btn-danger">
						<span class="fa fa-exclamation-triangle" aria-hidden="true"></span>
					</span>
				</div><!-- buttons with icon -->

				<div class="htlfndr-elements-content" id="htlfndr-alerts">
					<h3 class="htlfndr-font-24"><b>alerts</b></h3>
					<div class="alert alert-success">
					  <i class="fa fa-check"></i>Praesent sociosqu condimentum
					</div>

					<div class="alert alert-info">
					  <i class="fa fa-info"></i>Praesent sociosqu condimentum
					</div>

					<div class="alert alert-warning">
					  <i class="fa fa-exclamation"></i>Praesent sociosqu condimentum
					</div>

					<div class="alert alert-danger">
					  <i class="fa fa-exclamation-triangle"></i>Praesent sociosqu condimentum
					</div>
				</div><!-- alerts -->

				<div class="htlfndr-elements-content"  id="htlfndr-pag">
					<h3 class="htlfndr-font-24"><b>pagination</b></h3>
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
				</div><!-- pagination -->
				<div class="htlfndr-elements-title">
					<h2>Forms</h2>
				</div>
				<div class="htlfndr-elements-content"  id="htlfndr-inputs">
					<h3 class="htlfndr-font-24"><b>text inputs</b></h3>
					<div class="row">
						<div class="col-md-4">
							<label>Normal Input</label>
							<input id="normal-input" class="htlfndr-input" type="text" placeholder="City, airport, zip code" name="normal-input">
						</div>
						<div class="col-md-4">
							<label>Incorrectly filled</label>
							<input id="incor-filled" class="htlfndr-input incorrect" type="text"  name="incor-filled">
						</div>
						<div class="col-md-4">
							<label>Active Input</label>
							<input id="active-input" class="htlfndr-input active" type="text"  name="active-input">
						</div>
					</div>
					<div class="clearfix">
					<div id="htlfndr-input-date-cal" class="htlfndr-input-wrapper">
						<label for="htlfndr-date-in-cal">Calendar Input</label>
						<input type="text" name="htlfndr-date-in-cal" id="htlfndr-date-in-cal" class="search-hotel-input" />
						<button type="button" class="htlfndr-clear-datepicker"></button>
					</div>
					<label>Select Input</label><br>
					<select class="htlfndr-select-custom" data-title="item">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
					</select>
					</div>
					<label>Message Input</label><br>
					<textarea id="htlfndr-personal-comment" class="htlfndr-textarea" name="htlfndr-personal-comment" placeholder="Enter your message"></textarea>
				</div>	<!-- text inputs -->

				<div class="htlfndr-elements-content" id="htlfndr-tabs">
					<h3 class="htlfndr-font-24"><b>Tabs</b></h3>
					<section id="htlfndr-hotel-description-tabs">
							<ul>
								<li class="active" data-number="0"><a href="#htlfndr-hotel-description-tab-1">description</a></li>
								<li data-number="1"><a href="#htlfndr-hotel-description-tab-2">availability</a></li>
								<li data-number="2"><a href="#htlfndr-hotel-description-tab-3">amenities</a></li>
								<li data-number="3"><a href="#htlfndr-hotel-description-tab-4">reviews</a></li>
								<li data-number="4"><a href="#htlfndr-hotel-description-tab-5">write a review</a></li>
							</ul>
						<div id="htlfndr-hotel-description-tab-1" class="htlfndr-hotel-description-tab">
							<div class="row">
								<div class="col-md-5 htlfndr-description-table">
									<table>
										<tr>
											<th class="htlfndr-scope-row">type:</th>
											<td>hotel</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">rating stars:</th>
											<td>4 stars</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">country:</th>
											<td>usa</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">city:</th>
											<td>san francisco</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">address:</th>
											<td>Giudeca 810 st.</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">phone no:</th>
											<td>1-800-123-0000</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">check in:</th>
											<td>12-00 pm</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">check out:</th>
											<td>12-00 am</td>
										</tr>
										<tr>
											<th class="htlfndr-scope-row">minimum stay:</th>
											<td>2 days</td>
										</tr>
									</table>
								</div><!-- .htlfndr-description-table -->
								<div class="col-md-7 htlfndr-description-right-side">
									<!-- Using Bootstrap media object class-->
									<div class="media">
										<div class="media-left">
											<img class="media-object" src="http://placehold.it/90x90" alt="client" />
										</div><!-- .media-left -->
										<div class="media-body">
											<h5>hotel manager</h5>
											<h4 class="media-heading">jessica brown</h4>
										</div><!-- .media-body -->
									</div><!-- .media -->
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, dolores eveniet laboriosam maxime molestias nulla quidem similique. Amet asperiores at esse expedita iusto magni, nam perferendis sequi? Molestias possimus, quasi. Amet asperiores at esse expedita iusto magni, nam perferendis sequi? Molestias possimus, quasi.</p>
									</blockquote>
								</div><!-- .htlfndr-description-right-side -->
							</div><!-- .row -->
						</div><!-- #htlfndr-hotel-description-tab-1 .htlfndr-hotel-description-tab-->
						<div id="htlfndr-hotel-description-tab-2" class="htlfndr-hotel-description-tab">
							<aside class="htlfndr-sidebar-in-top htlfndr-short-form">
								<form name="search-hotel" id="search-hotel" class="htlfndr-search-form">
									<div id="htlfndr-input-date-in" class="htlfndr-input-wrapper">
										<label for="htlfndr-date-in" class="sr-only">Date in</label>
										<input type="text" name="htlfndr-date-in" id="htlfndr-date-in" class="search-hotel-input" />
										<button type="button" class="htlfndr-clear-datepicker"></button>
									</div><!-- #htlfndr-input-date-in .htlfndr-input-wrapper -->
									<div id="htlfndr-input-date-out" class="htlfndr-input-wrapper">
										<label for="htlfndr-date-out" class="sr-only">Date out</label>
										<input type="text" name="htlfndr-date-out" id="htlfndr-date-out" class="search-hotel-input" />
										<button type="button" class="htlfndr-clear-datepicker"></button>
									</div><!-- #htlfndr-input-date-out .htlfndr-input-wrapper -->
									<div id="htlfndr-input-4" class="htlfndr-input-wrapper">
										<label for="htlfndr-dropdown" class="sr-only">The number of people in room</label>
										<select name="htlfndr-dropdown" id="htlfndr-dropdown" class="htlfndr-dropdown">
											<option value="1 adult">1 adult</option>
											<option value="2 adults in 1 room">2 adults in 1 room</option>
											<option value="3 adults in 1 room">3 adults in 1 room</option>
											<option value="4 adults in 1 room">4 adults in 1 room</option>
											<option value="2 adults in 2 room">2 adults in 2 room</option>
											<option value="need more">Need more?</option>
										</select>
									</div><!-- #htlfndr-input-4 .htlfndr-input-wrapper -->
									<div id="htlfndr-input-5" class="htlfndr-input-wrapper">
										<input type="submit" value="update" class="btn-default"/>
									</div><!-- #htlfndr-input-5 .htlfndr-input-wrapper -->
									<div class="clearfix"></div>
								</form>
								<!-- .widget -->
							</aside><!-- .htlfndr-sidebar .htlfndr-sidebar-in-top -->

							<section class="htlfndr-available-rooms-section">
								<header>
									<h3>available rooms</h3>
								</header>
								<article class="htlfndr-tab-article htlfndr-second-tab-post">
									<div>
										<div class="htlfndr-post-thumbnail">
											<img src="http://placehold.it/230x135" alt="room pic"/>
										</div>
										<div class="htlfndr-post-wrapper">
											<header>
												<h2 class="htlfndr-post-title">King Family Suite</h2>
											</header>
											<h6 class="htlfndr-post-info">max Guests: <span class="htlfndr-guests">7</span> max Kids: <span
												class="htlfndr-kids">3</span></h6>
											<p class="htlfndr-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
												alias beatae debitis deserunt eius esse, explicabo facilis hic!</p>
											<p class="htlfndr-button-block"><a class="htlfndr-select-hotel-button" role="button" href="hotel-room-page.php">select</a></p>
										</div>
									</div>
									<div>
										<div class="htlfndr-post-thumbnail">
											<img src="http://placehold.it/230x135" alt="room pic"/>
										</div>
										<div class="htlfndr-post-wrapper">
											<header>
												<h2 class="htlfndr-post-title">Twin Room</h2>
											</header>
											<h6 class="htlfndr-post-info">max Guests: <span class="htlfndr-guests">7</span> max Kids: <span
												class="htlfndr-kids">3</span></h6>
											<p class="htlfndr-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
												alias beatae debitis deserunt eius esse, explicabo facilis hic!</p>
											<p class="htlfndr-button-block"><a class="htlfndr-select-hotel-button" role="button" href="hotel-room-page.php">select</a></p>
										</div>
									</div>
									<a href="search-rooms.php">
										<i class="fa fa-eye"></i>View all avaliable rooms
									</a>
								</article><!-- .htlfndr-tab-article .htlfndr-second-tab-post -->
							</section><!-- .htlfndr-available-rooms-section -->
						</div><!-- #htlfndr-hotel-description-tab-2 .htlfndr-hotel-description-tab-->
						<div id="htlfndr-hotel-description-tab-3" class="htlfndr-hotel-description-tab">
							<article class="htlfndr-tab-article htlfndr-third-tab-post">
								<header>
									<h3>amenities of hilton</h3>
								</header>
								<p class="htlfndr-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, animi consequatur deleniti dignissimos eligendi error esse ex illum iusto officia quos unde! Dolore illum iusto optio, porro rerum voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem expedita impedit laboriosam minus nemo nulla numquam similique voluptatem! Distinctio magnam nesciunt sequi. Error eum molestias neque sunt veritatis voluptates!</p>
								<footer class="row htlfndr-amenities">
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-wifi"></i>
										</div>
										<p>Wi-Fi internet</p>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-gamepad"></i>
										</div>
										<p>game zone</p>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-life-ring"></i>
										</div>
										<p>pool</p>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-cutlery"></i>
										</div>
										<p>room service</p>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-wheelchair"></i>
										</div>
										<p>wheelchair access</p>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="htlfndr-amenities-icon">
											<i class="fa fa-spoon"></i>
										</div>
										<p>kitchen</p>
									</div>
								</footer>
							</article><!-- .htlfndr-tab-article .htlfndr-third-tab-post -->
						</div><!-- #htlfndr-hotel-description-tab-3 .htlfndr-hotel-description-tab-->
						<div id="htlfndr-hotel-description-tab-4" class="htlfndr-hotel-description-tab">
							<div class="htlfndr-hotel-marks">
								<div class="htlfndr-overview-rating">
									<div class="htlfndr-rating-stars">
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
										<i class="fa fa-star htlfndr-star-color"></i>
									</div> <!-- .htlfndr-rating-stars -->
									<dl>
										<dt><span>4.8</span> out of 5</dt>
										<dd>based on <span>123</span> Reviews</dd>
									</dl>
								</div><!-- .htlfndr-overview-rating -->
								<div class="htlfndr-detailed-rating">
									<table>
										<tr>
											<th>room cleanliness</th>
											<td class="htlfndr-meter-cell">
												<meter class="htlfndr-meter" value="0.75" min="0" max="1">
												</meter>
											</td>
											<td class="htlfndr-rating-cell">4.5</td>
										</tr>
										<tr>
											<th>service & staff</th>
											<td class="htlfndr-meter-cell">
												<meter class="htlfndr-meter" value="0.6" min="0" max="1">
												</meter>
											</td>
											<td class="htlfndr-rating-cell">3</td>
										</tr>
										<tr>
											<th>room comfort</th>
											<td class="htlfndr-meter-cell">
												<meter class="htlfndr-meter" value="0.9" min="0" max="1">
												</meter>
											</td>
											<td class="htlfndr-rating-cell">4.8</td>
										</tr>
										<tr>
											<th>hotel condition</th>
											<td class="htlfndr-meter-cell">
												<meter class="htlfndr-meter" value="0.75" min="0" max="1">
												</meter>
											</td>
											<td class="htlfndr-rating-cell">4.5</td>
										</tr>
									</table>
								</div><!-- .htlfndr-detailed-rating -->
							</div><!-- .htlfndr-hotel-marks -->

							<div class="clearfix"></div>

							<div class="htlfndr-visitor-review">
								<div class="htlfndr-review-left-side">
									<div class="htlfndr-visitor-avatar">
										<img src="http://placehold.it/120x120" alt="visitor photo" />
									</div><!-- .htlfndr-visitor-avatar -->
									<div class="htlfndr-visitor-flag">
										<img src="images/icon-flag-ukraine.png" alt="visitor flag">
									</div><!-- .htlfndr-visitor-flag -->
									<dl>
										<dt>john doe</dt>
										<dd>kiev, ukraine</dd>
									</dl>
								</div><!-- .htlfndr-review-left-side -->
								<div class="htlfndr-review-right-side">
									<article class="htlfndr-visitor-post">
										<header>
											<h3>"Tempus vestibulum mus imperdiet nibh sem"</h3>
											<h6>posted 12 May 2015 </h6>
										</header>
										<div class="htlfndr-rating-stars">
											<i class="fa fa-star htlfndr-star-color"></i>
											<i class="fa fa-star htlfndr-star-color"></i>
											<i class="fa fa-star htlfndr-star-color"></i>
											<i class="fa fa-star htlfndr-star-color"></i>
											<i class="fa fa-star htlfndr-star-color"></i>
										</div> <!-- .htlfndr-rating-stars -->
										<p>Pharetra quis netus vel vehicula class vestibulum nisl donec hendrerit fermentum magna sed amet purus sit nec class sit fringilla tellus volutpat per eget molestie Platea suspendisse eget tortor pharetra magna nam senectus tristique cursus ut odio sollicitudin venenatis natoque dis maecenas magna dignissim sociosqu et sociis accumsan interdum dictum netus quis enim phasellus suscipit nunc donec purus dui himenaeos nulla sociosqu rhoncus dictumst fusce ultricies congue sapien porttitor maecenas fringilla ipsum nam lorem aliquam rhoncus elit himenaeos</p>
										<footer>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-5 htlfndr-review-footer-marks">
													<h3>room cleanliness</h3>
													<p><span class="htlfndr-round-mark">4</span>&emsp;out of 5</p>
												</div><!-- .htlfndr-review-footer-marks -->
												<div class="col-xs-6 col-sm-6 col-md-7 htlfndr-review-footer-marks">
													<h3>room comfort</h3>
													<p><span class="htlfndr-round-mark">3</span>&emsp;out of 5</p>
												</div><!-- .htlfndr-review-footer-marks -->
												<div class="clearfix"></div>
												<div class="col-xs-6 col-sm-6 col-md-5 htlfndr-review-footer-marks">
													<h3>service & staff</h3>
													<p><span class="htlfndr-round-mark">2</span>&emsp;out of 5</p>
												</div><!-- .htlfndr-review-footer-marks -->
												<div class="col-xs-6 col-sm-6 col-md-7 htlfndr-review-footer-marks">
													<h3>hotel condition</h3>
													<p><span class="htlfndr-round-mark">4</span>&emsp;out of 5</p>
												</div><!-- .htlfndr-review-footer-marks -->
											</div>
										</footer>
									</article>
								</div><!-- .htlfndr-review-right-side -->
							</div><!-- .htlfndr-visitor-review -->
						</div><!-- #htlfndr-hotel-description-tab-4 .htlfndr-hotel-description-tab-->
						<div id="htlfndr-hotel-description-tab-5" class="htlfndr-hotel-description-tab">
							<form method="get" class="htlfndr-review-form">
								<div class="htlfndr-form-left-side">
									<label for="review-title">review title</label>
									<input type="text" name="review-title" id="review-title" class="htlfndr-review-form-input"/>
									<label for="review-text">review text</label>
									<textarea name="review-text" id="review-text" class="htlfndr-review-form-input"></textarea>
								</div><!-- .htlfndr-form-left-side -->
								<div class="htlfndr-form-right-side">
									<div class="htlfndr-radio-set">
										<h3>room cleanliness</h3>
										<label for="htlfndr-review-radio-1">1</label>
										<input type="radio" name="htlfndr-review-radio-cleanliness" id="htlfndr-review-radio-1" value="1" />
										<label for="htlfndr-review-radio-2">2</label>
										<input type="radio" name="htlfndr-review-radio-cleanliness" id="htlfndr-review-radio-2" value="2" />
										<label for="htlfndr-review-radio-3">3</label>
										<input type="radio" name="htlfndr-review-radio-cleanliness" id="htlfndr-review-radio-3" value="3" />
										<label for="htlfndr-review-radio-4">4</label>
										<input type="radio" name="htlfndr-review-radio-cleanliness" id="htlfndr-review-radio-4" value="4" />
										<label for="htlfndr-review-radio-5">5</label>
										<input type="radio" name="htlfndr-review-radio-cleanliness" id="htlfndr-review-radio-5" value="5" checked="checked" />
									</div><!-- #htlfndr-radio-set -->
									<div class="htlfndr-radio-set">
										<h3>service & staff</h3>
										<label for="htlfndr-review-radio-2-1">1</label>
										<input type="radio" name="htlfndr-review-radio-service" id="htlfndr-review-radio-2-1" value="1" />
										<label for="htlfndr-review-radio-2-2">2</label>
										<input type="radio" name="htlfndr-review-radio-service" id="htlfndr-review-radio-2-2" value="2" />
										<label for="htlfndr-review-radio-2-3">3</label>
										<input type="radio" name="htlfndr-review-radio-service" id="htlfndr-review-radio-2-3" value="3" />
										<label for="htlfndr-review-radio-2-4">4</label>
										<input type="radio" name="htlfndr-review-radio-service" id="htlfndr-review-radio-2-4" value="4" checked="checked" />
										<label for="htlfndr-review-radio-2-5">5</label>
										<input type="radio" name="htlfndr-review-radio-service" id="htlfndr-review-radio-2-5" value="5" />
									</div><!-- #htlfndr-radio-set -->
									<div class="htlfndr-radio-set">
										<h3>room comfort</h3>
										<label for="htlfndr-review-radio-3-1">1</label>
										<input type="radio" name="htlfndr-review-radio-comfort" id="htlfndr-review-radio-3-1" value="1" />
										<label for="htlfndr-review-radio-3-2">2</label>
										<input type="radio" name="htlfndr-review-radio-comfort" id="htlfndr-review-radio-3-2" value="2" />
										<label for="htlfndr-review-radio-3-3">3</label>
										<input type="radio" name="htlfndr-review-radio-comfort" id="htlfndr-review-radio-3-3" value="3" />
										<label for="htlfndr-review-radio-3-4">4</label>
										<input type="radio" name="htlfndr-review-radio-comfort" id="htlfndr-review-radio-3-4" value="4" checked="checked" />
										<label for="htlfndr-review-radio-3-5">5</label>
										<input type="radio" name="htlfndr-review-radio-comfort" id="htlfndr-review-radio-3-5" value="5" />
									</div><!-- #htlfndr-radio-set -->
									<div class="htlfndr-radio-set">
										<h3>hotel condition</h3>
										<label for="htlfndr-review-radio-4-1">1</label>
										<input type="radio" name="htlfndr-review-radio-condition" id="htlfndr-review-radio-4-1" value="1" />
										<label for="htlfndr-review-radio-4-2">2</label>
										<input type="radio" name="htlfndr-review-radio-condition" id="htlfndr-review-radio-4-2" value="2" />
										<label for="htlfndr-review-radio-4-3">3</label>
										<input type="radio" name="htlfndr-review-radio-condition" id="htlfndr-review-radio-4-3" value="3" checked="checked" />
										<label for="htlfndr-review-radio-4-4">4</label>
										<input type="radio" name="htlfndr-review-radio-condition" id="htlfndr-review-radio-4-4" value="4" />
										<label for="htlfndr-review-radio-4-5">5</label>
										<input type="radio" name="htlfndr-review-radio-condition" id="htlfndr-review-radio-4-5" value="5" />
									</div><!-- #htlfndr-radio-set -->
								</div><!-- .htlfndr-form-right-side -->
								<div class="clearfix"></div>
								<input type="submit" value="Leave a Review" class="btn-default"/>
							</form>
						</div><!-- #htlfndr-hotel-description-tab-5 .htlfndr-hotel-description-tab-->
					</section><!-- #htlfndr-hotel-description-tabs -->
				</div><!-- tabs -->

				<div class="htlfndr-elements-content" id="htlfndr-adv-but">
					<h3 class="htlfndr-font-24"><b>Advanced checkboxes and radios</b></h3>
					<div class="row htlfndr-check-radios">
						<div class="col-md-6">
							<p>
								<input type="radio" id="htlfndr-radio-1" name="htlfndr-radio" checked="checked"/>
								<label class="htlfndr-top-label" for="htlfndr-radio-1">Radio 1</label>
							</p>
							<p>
								<input type="radio" id="htlfndr-radio-2" name="htlfndr-radio" />
								<label class="htlfndr-top-label" for="htlfndr-radio-2">Radio 2</label>
							</p>
							<p>
								<input type="radio" id="htlfndr-radio-3" name="htlfndr-radio" disabled="disabled"/>
								<label class="htlfndr-top-label" for="htlfndr-radio-3">Radio Disable</label>
							</p>
							<p>
								<input type="radio" id="htlfndr-radio-4" name="htlfndr-radio-dis"  disabled="disabled" checked="checked"/>
								<label class="htlfndr-top-label"  for="htlfndr-radio-4">Radio Disable Checked</label>
							</p>
						</div>
						<div class="col-md-6">
							<p>
								<input type="checkbox" id="htlfndr-check-1" name="htlfndr-check" checked="checked"/>
								<label for="htlfndr-check-1">Checkbox 1</label>
							</p>
							<p>
								<input type="checkbox" id="htlfndr-check-2" name="htlfndr-check"/>
								<label for="htlfndr-check-2">Checkbox 2</label>
							</p>
							<p>
								<input type="checkbox" id="htlfndr-check-4" name="htlfndr-check" disabled="disabled"/>
								<label for="htlfndr-check-4">Checkbox Disable</label>
							</p>
							<p>
								<input type="checkbox" id="htlfndr-check-5" name="htlfndr-check" disabled="disabled" checked="checked"/>
								<label for="htlfndr-check-5">Checkbox Disable Checked</label>
							</p>
						</div>
					</div>
				</div><!-- Advanced checkboxes and radios -->
				<div class="htlfndr-elements-content" id="htlfndr-slider">
					<h3 class="htlfndr-font-24"><b>range slider</b></h3>
					<div class="clearfix htlfndr-price-range">
						<span class="pull-left">$0</span><span class="pull-right">$5000</span>
					</div>
					<div id="htlfndr-price-slider"><span class="price_min"></span><span class="price_max"></span></div>
					<input type="text" id="htlfndr-price-show" readonly />
					<input type="hidden" name="htlfndr-price-start" id="htlfndr-price-start" value="100"/>
					<input type="hidden" name="htlfndr-price-stop" id="htlfndr-price-stop" value="1000"/>
				</div><!-- ranger slider -->
				<div class="htlfndr-elements-title">
					<h2>Icons</h2>
				</div>
				<div class="htlfndr-elements-content" id="htlfndr-icons">
					<h3 class="htlfndr-font-24"><b>Font Awesome</b></h3>
						<div class="row htlfndr-icon-list">
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-adjust"></i> fa-adjust</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-adn"></i> fa-adn</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-align-justify"></i> fa-align-justify</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-align-left"></i> fa-align-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-align-right"></i> fa-align-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-amazon"></i> fa-amazon</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ambulance"></i> fa-ambulance</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-anchor"></i> fa-anchor</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-android"></i> fa-android</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angellist"></i> fa-angellist</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-down"></i> fa-angle-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-left"></i> fa-angle-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-right"></i> fa-angle-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-angle-up"></i> fa-angle-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-apple"></i> fa-apple</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-archive"></i> fa-archive</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-area-chart"></i> fa-area-chart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrows"></i> fa-arrows</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrows"></i> fa-arrows</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-asterisk"></i> fa-asterisk</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-at"></i> fa-at</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-backward"></i> fa-backward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-balance-scale"></i> fa-balance-scale</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ban"></i> fa-ban</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bar-chart"></i> fa-bar-chart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-barcode"></i> fa-barcode</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bars"></i> fa-bars</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-0"></i> fa-battery-0 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-1"></i> fa-battery-1 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-2"></i> fa-battery-2 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-3"></i> fa-battery-3 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-4"></i> fa-battery-4 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-empty"></i> fa-battery-empty</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-full"></i> fa-battery-full</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-half"></i> fa-battery-half</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-quarter"></i> fa-battery-quarter</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-battery-three-quarters"></i> fa-battery-three-quarters</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bed"></i> fa-bed</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-beer"></i> fa-beer</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bell"></i> fa-bell</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bell-o"></i> fa-bell-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bell-slash"></i> fa-bell-slash</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bell-slash-o"></i> fa-bell-slash-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-behance"></i> fa-behance</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-behance-square"></i> fa-behance-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bicycle"></i> fa-bicycle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-binoculars"></i> fa-binoculars</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-birthday-cake"></i> fa-birthday-cake</div>    
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-black-tie"></i> fa-black-tie</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bluetooth"></i> fa-bluetooth</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bluetooth-b"></i> fa-bluetooth-b</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bolt"></i> fa-bolt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bomb"></i> fa-bomb</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-book"></i> fa-book</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bookmark"></i> fa-bookmark</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-briefcase"></i> fa-briefcase</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-btc"></i> fa-btc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bug"></i> fa-bug</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-building"></i> fa-building</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-building-o"></i> fa-building-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bullseye"></i> fa-bullseye</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-bus"></i> fa-bus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-buysellads"></i> fa-buysellads</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calculator"></i> fa-calculator</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar"></i> fa-calendar</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar-check-o"></i> fa-calendar-check-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar-minus-o"></i> fa-calendar-minus-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar-plus-o"></i> fa-calendar-plus-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-calendar-times-o"></i> fa-calendar-times-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-camera"></i> fa-camera</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-car"></i> fa-car</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cart-arrow-down"></i> fa-cart-arrow-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cart-plus"></i> fa-cart-plus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-down"></i> fa-caret-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-left"></i> fa-caret-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-right"></i> fa-caret-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-caret-up"></i> fa-caret-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc"></i> fa-cc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-diners-club"></i> fa-cc-diners-club</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-jcb"></i> fa-cc-jcb</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-certificate"></i> fa-certificate</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-check"></i> fa-check</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-check-circle"></i> fa-check-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-check-square"></i> fa-check-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-chrome"></i> fa-chrome</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-codepen"></i> fa-codepen</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-codiepie"></i> fa-codiepie</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-connectdevelop"></i> fa-connectdevelop</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-contao"></i> fa-contao</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-css3"></i> fa-css3</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-child"></i> fa-child</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-circle"></i> fa-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-circle-o"></i> fa-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-clipboard"></i> fa-clipboard</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-clock-o"></i> fa-clock-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-clone"></i> fa-clone</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-close"></i> fa-close <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cloud"></i> fa-cloud</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-code"></i> fa-code</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-code-fork"></i> fa-code-fork</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-coffee"></i> fa-coffee</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cog"></i> fa-cog</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cogs"></i> fa-cogs</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-columns"></i> fa-columns</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-comment"></i> fa-comment</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-comment-o"></i> fa-comment-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-commenting"></i> fa-commenting</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-commenting-o"></i> fa-commenting-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-comments"></i> fa-comments</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-comments-o"></i> fa-comments-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-compass"></i> fa-compass</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-compress"></i> fa-compress</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-copyright"></i> fa-copyright</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-creative-commons"></i> fa-creative-commons</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-credit-card"></i> fa-credit-card</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-credit-card-alt"></i> fa-credit-card-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-crop"></i> fa-crop</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cube"></i> fa-cube</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cubes"></i> fa-cubes</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-cutlery"></i> fa-cutlery</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dashcube"></i> fa-dashcube</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-database"></i> fa-database</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-delicious"></i> fa-delicious</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-deviantart"></i> fa-deviantart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-desktop"></i> fa-desktop</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-diamond"></i> fa-diamond</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-digg"></i> fa-digg</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-download"></i> fa-download</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dribbble"></i> fa-dribbble</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-dropbox"></i> fa-dropbox</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-drupal"></i> fa-drupal</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-edge"></i> fa-edge</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-empire"></i> fa-empire</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-envelope"></i> fa-envelope</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eraser"></i> fa-eraser</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eur"></i> fa-eur</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-exchange"></i> fa-exchange</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-exclamation"></i> fa-exclamation</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-expeditedssl"></i> fa-expeditedssl</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-external-link"></i> fa-external-link</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eject"></i> fa-eject</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-expand"></i> fa-expand</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eye"></i> fa-eye</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-eyedropper"></i> fa-eyedropper</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-facebook"></i> fa-facebook</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-facebook-f"></i> fa-facebook-f <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-facebook-official"></i> fa-facebook-official</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fax"></i> fa-fax</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-feed"></i> fa-feed <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-female"></i> fa-female</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file"></i> fa-file</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-files-o"></i> fa-files-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-o"></i> fa-file-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-text"></i> fa-file-text</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-film"></i> fa-film</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-filter"></i> fa-filter</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fire"></i> fa-fire</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-firefox"></i> fa-firefox</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-foursquare"></i> fa-foursquare</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flag"></i> fa-flag</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flag-o"></i> fa-flag-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flask"></i> fa-flask</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-flickr"></i> fa-flickr</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-folder"></i> fa-folder</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-folder-o"></i> fa-folder-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-folder-open"></i> fa-folder-open</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-font"></i> fa-font</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fonticons"></i> fa-fonticons</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-fort-awesome"></i> fa-fort-awesome</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-forumbee"></i> fa-forumbee</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-forward"></i> fa-forward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-frown-o"></i> fa-frown-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-futbol-o"></i> fa-futbol-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gamepad"></i> fa-gamepad</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gavel"></i> fa-gavel</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gbp"></i> fa-gbp</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-get-pocket"></i> fa-get-pocket</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gg"></i> fa-gg</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gg-circle"></i> fa-gg-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gift"></i> fa-gift</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-git"></i> fa-git</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-git-square"></i> fa-git-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-github"></i> fa-github</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-github-alt"></i> fa-github-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-github-square"></i> fa-github-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gittip"></i> fa-gittip <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-glass"></i> fa-glass</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-globe"></i> fa-globe</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-google"></i> fa-google</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-google-plus"></i> fa-google-plus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-gratipay"></i> fa-gratipay</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-h-square"></i> fa-h-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-grab-o"></i> fa-hand-grab-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-lizard-o"></i> fa-hand-lizard-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-paper-o"></i> fa-hand-paper-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-peace-o"></i> fa-hand-peace-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-pointer-o"></i> fa-hand-pointer-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-rock-o"></i> fa-hand-rock-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-scissors-o"></i> fa-hand-scissors-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-spock-o"></i> fa-hand-spock-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hand-stop-o"></i> fa-hand-stop-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hashtag"></i> fa-hashtag</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-header"></i> fa-header</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-headphones"></i> fa-headphones</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-heart"></i> fa-heart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-heart-o"></i> fa-heart-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-heartbeat"></i> fa-heartbeat</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-history"></i> fa-history</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-home"></i> fa-home</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hotel"></i> fa-hotel <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass"></i> fa-hourglass</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-1"></i> fa-hourglass-1 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-2"></i> fa-hourglass-2 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-3"></i> fa-hourglass-3 <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-end"></i> fa-hourglass-end</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-half"></i> fa-hourglass-half</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-o"></i> fa-hourglass-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-hourglass-start"></i> fa-hourglass-start</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-houzz"></i> fa-houzz</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-html5"></i> fa-html5</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-i-cursor"></i> fa-i-cursor</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ils"></i> fa-ils</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-inbox"></i> fa-inbox</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-indent"></i> fa-indent</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-industry"></i> fa-industry</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-info"></i> fa-info</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-info-circle"></i> fa-info-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-inr"></i> fa-inr</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-instagram"></i> fa-instagram</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-internet-explorer"></i> fa-internet-explorer</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ioxhost"></i> fa-ioxhost</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-italic"></i> fa-italic</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-joomla"></i> fa-joomla</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-jpy"></i> fa-jpy</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-key"></i> fa-key</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-krw"></i> fa-krw</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-language"></i> fa-language</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-laptop"></i> fa-laptop</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-lastfm"></i> fa-lastfm</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-lastfm-square"></i> fa-lastfm-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-leaf"></i> fa-leaf</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-leanpub"></i> fa-leanpub</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-level-down"></i> fa-level-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-level-up"></i> fa-level-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-life-buoy"></i> fa-life-buoy <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-life-ring"></i> fa-life-ring</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-line-chart"></i> fa-line-chart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-link"></i> fa-link</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-linkedin"></i> fa-linkedin</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-linux"></i> fa-linux</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-list"></i> fa-list</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-list-alt"></i> fa-list-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-list-ol"></i> fa-list-ol</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-list-ul"></i> fa-list-ul</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-lock"></i> fa-lock</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-magic"></i> fa-magic</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-magnet"></i> fa-magnet</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-male"></i> fa-male</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-map"></i> fa-map</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-map-marker"></i> fa-map-marker</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-map-o"></i> fa-map-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-map-pin"></i> fa-map-pin</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-map-signs"></i> fa-map-signs</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-meanpath"></i> fa-meanpath</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-medium"></i> fa-medium</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-medkit"></i> fa-medkit</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-meh-o"></i> fa-meh-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-microphone"></i> fa-microphone</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mixcloud"></i> fa-mixcloud</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-minus-square"></i> fa-minus-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mobile"></i> fa-mobile</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-modx"></i> fa-modx</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-money"></i> fa-money</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-moon-o"></i> fa-moon-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-motorcycle"></i> fa-motorcycle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-mouse-pointer"></i> fa-mouse-pointer</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-music"></i> fa-music</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-newspaper-o"></i> fa-newspaper-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-object-group"></i> fa-object-group</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-object-ungroup"></i> fa-object-ungroup</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-odnoklassniki"></i> fa-odnoklassniki</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-odnoklassniki-square"></i> fa-odnoklassniki-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-opencart"></i> fa-opencart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-openid"></i> fa-openid</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-opera"></i> fa-opera</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-optin-monster"></i> fa-optin-monster</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-outdent"></i> fa-outdent</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paint-brush"></i> fa-paint-brush</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pagelines"></i> fa-pagelines</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paypal"></i> fa-paypal</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paperclip"></i> fa-paperclip</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paragraph"></i> fa-paragraph</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pause"></i> fa-pause</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pause-circle"></i> fa-pause-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pause-circle-o"></i> fa-pause-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-paw"></i> fa-paw</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pencil"></i> fa-pencil</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-percent"></i> fa-percent</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-phone"></i> fa-phone</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-phone-square"></i> fa-phone-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pinterest"></i> fa-pinterest</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pinterest-p"></i> fa-pinterest-p</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-picture-o"></i> fa-picture-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plane"></i> fa-plane</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-play"></i> fa-play</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-play-circle"></i> fa-play-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plug"></i> fa-plug</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plus"></i> fa-plus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plus-square"></i> fa-plus-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-power-off"></i> fa-power-off</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-product-hunt"></i> fa-product-hunt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-print"></i> fa-print</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-qq"></i> fa-qq</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-qrcode"></i> fa-qrcode</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-question"></i> fa-question</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-question-circle"></i> fa-question-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-quote-left"></i> fa-quote-left</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-quote-right"></i> fa-quote-right</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit"></i> fa-reddit</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit-alien"></i> fa-reddit-alien</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-renren"></i> fa-renren</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-random"></i> fa-random</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-recycle"></i> fa-recycle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit"></i> fa-reddit</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit-alien"></i> fa-reddit-alien</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-renren"></i> fa-renren</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-refresh"></i> fa-refresh</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-registered"></i> fa-registered</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-remove"></i> fa-remove <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-repeat"></i> fa-repeat</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reply"></i> fa-reply</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-reply-all"></i> fa-reply-all</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-retweet"></i> fa-retweet</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-road"></i> fa-road</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rocket"></i> fa-rocket</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rss"></i> fa-rss</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rss-square"></i> fa-rss-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rub"></i> fa-rub</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-safari"></i> fa-safari</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-scissors"></i> fa-scissors</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-scribd"></i> fa-scribd</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-search"></i> fa-search</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-search-minus"></i> fa-search-minus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-search-plus"></i> fa-search-plus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sellsy"></i> fa-sellsy</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-server"></i> fa-server</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-share"></i> fa-share</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-share-alt"></i> fa-share-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-share-square"></i> fa-share-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shield"></i> fa-shield</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ship"></i> fa-ship</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shirtsinbulk"></i> fa-shirtsinbulk</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shopping-bag"></i> fa-shopping-bag</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shopping-basket"></i> fa-shopping-basket</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sign-in"></i> fa-sign-in</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sign-out"></i> fa-sign-out</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-signal"></i> fa-signal</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-simplybuilt"></i> fa-simplybuilt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sitemap"></i> fa-sitemap</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-skyatlas"></i> fa-skyatlas</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-skype"></i> fa-skype</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-slack"></i> fa-slack</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sliders"></i> fa-sliders</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-slideshare"></i> fa-slideshare</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-smile-o"></i> fa-smile-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort"></i> fa-sort</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-spinner"></i> fa-spinner</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-spoon"></i> fa-spoon</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-spotify"></i> fa-spotify</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-square"></i> fa-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-square-o"></i> fa-square-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star"></i> fa-star</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star-half"></i> fa-star-half</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-star-o"></i> fa-star-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-steam"></i> fa-steam</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-steam-square"></i> fa-steam-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-step-backward"></i> fa-step-backward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-step-forward"></i> fa-step-forward</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sticky-note"></i> fa-sticky-note</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sticky-note-o"></i> fa-sticky-note-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stop"></i> fa-stop</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stop-circle"></i> fa-stop-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stop-circle-o"></i> fa-stop-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-street-view"></i> fa-street-view</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-subscript"></i> fa-subscript</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-suitcase"></i> fa-suitcase</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-sun-o"></i> fa-sun-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-superscript"></i> fa-superscript</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-table"></i> fa-table</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tablet"></i> fa-tablet</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tachometer"></i> fa-tachometer</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tag"></i> fa-tag</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tags"></i> fa-tags</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tasks"></i> fa-tasks</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-taxi"></i> fa-taxi</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-television"></i> fa-television</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-terminal"></i> fa-terminal</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-text-height"></i> fa-text-height</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-text-width"></i> fa-text-width</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-th"></i> fa-th</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-th-large"></i> fa-th-large</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-th-list"></i> fa-th-list</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-ticket"></i> fa-ticket</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-times"></i> fa-times</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-times-circle"></i> fa-times-circle</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tint"></i> fa-tint</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-off"></i> fa-toggle-off</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-on"></i> fa-toggle-on</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-trademark"></i> fa-trademark</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-trash"></i> fa-trash</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-trash-o"></i> fa-trash-o</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tree"></i> fa-tree</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-trello"></i> fa-trello</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tripadvisor"></i> fa-tripadvisor</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-trophy"></i> fa-trophy</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-truck"></i> fa-truck</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-try"></i> fa-try</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tty"></i> fa-tty</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tumblr"></i> fa-tumblr</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-tv"></i> fa-tv <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-twitch"></i> fa-twitch</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-twitter"></i> fa-twitter</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-umbrella"></i> fa-umbrella</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-university"></i> fa-university</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-underline"></i> fa-underline</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-undo"></i> fa-undo</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-unlock"></i> fa-unlock</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-upload"></i> fa-upload</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-usb"></i> fa-usb</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-usd"></i> fa-usd</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-user"></i> fa-user</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-user-md"></i> fa-user-md</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-user-plus"></i> fa-user-plus</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-user-secret"></i> fa-user-secret</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-user-times"></i> fa-user-times</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-users"></i> fa-users</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-viacoin"></i> fa-viacoin</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-video-camera"></i> fa-video-camera</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-vimeo"></i> fa-vimeo</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-vine"></i> fa-vine</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-volume-down"></i> fa-volume-down</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-volume-off"></i> fa-volume-off</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-volume-up"></i> fa-volume-up</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-vk"></i> fa-vk</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-weibo"></i> fa-weibo</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-weixin"></i> fa-weixin</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wifi"></i> fa-wifi</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wikipedia-w"></i> fa-wikipedia-w</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-windows"></i> fa-windows</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wordpress"></i> fa-wordpress</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-whatsapp"></i> fa-whatsapp</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-wrench"></i> fa-wrench</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-xing"></i> fa-xing</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-xing-square"></i> fa-xing-square</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-yahoo"></i> fa-yahoo</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-yc"></i> fa-yc <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-yc-square"></i> fa-yc-square <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-yelp"></i> fa-yelp</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-youtube"></i> fa-youtube</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
						<div class="htlfndr-fa-icons col-md-3 col-sm-4 col-xs-6"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
					</div>
				</div><!-- Font Awesome -->
			</main>
			<aside id="htlfndr-right-sidebar" class="col-sm-12 col-md-3 col-lg-3 htlfndr-sidebar htlfndr-sidebar-in-right" role="complementary">
				<div class="htlfndr-menu_elements" >
					<div class="htlfndr-elements-tab collapsed" data-target="#typography" data-toggle="collapse">Typography <i class="caret"></i></div>
						<ul id="typography" class="collapse">
							<li><a href="#htlfndr-headers">Headers</a></li>
							<li><a href="#htlfndr-par">Paragraph</a></li>
							<li><a href="#htlfndr-big-par">Big Paragraph</a></li>
							<li><a href="#htlfndr-small-par">Small Paragraph</a></li>
							<li><a href="#htlfndr-blockquote">Blockquote</a></li>
							<li><a href="#htlfndr-tag">Code Tag</a></li>
							<li><a href="#htlfndr-pre-tag">Preformatted Tag</a></li>
							<li><a href="#htlfndr-tables">Tables</a></li>
						</ul>
						<div class="htlfndr-elements-tab collapsed" data-target="#elements" data-toggle="collapse">Elements <i class="caret"></i></div>
						<ul id="elements" class="collapse">
							<li><a href="#htlfndr-but">Buttons</a></li>
							<li><a href="#htlfndr-but-icon">Buttons with Icons</a></li>
							<li><a href="#htlfndr-alerts">Alerts</a></li>
							<li><a href="#htlfndr-pag">Paginations</a></li>
						</ul>
						<div class="htlfndr-elements-tab collapsed" data-target="#forms" data-toggle="collapse">Forms <i class="caret"></i></div>
						<ul id="forms" class="collapse">
							<li><a href="#htlfndr-inputs">Text Inputs</a></li>
							<li><a href="#htlfndr-tabs">Tabs</a></li>
							<li><a href="#htlfndr-adv-but">Advanced checkboxes and radios</a></li>
							<li><a href="#htlfndr-slider">Range slider</a></li>
						</ul>
					<div class="htlfndr-elements-tab"><a href="#htlfndr-icons">Icons</a></div>
				</div>
			</aside>
		</div><!-- .row .htlfndr-elements-content -->
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
								<li class="menu-item active"><a href="elements.php">elements</a></li>
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
<!-- Include Query UI Touch Punch is a small hack that enables the use of touch events on sites using the jQuery UI user interface library. -->
<script src="js/jquery.responsiveTabs.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Include Touch Menu Hover script file -->
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- Include Owl Carousel script file -->
<script src="js/owl.carousel.min.js"></script>

<!-- Include main script file -->
<script type="text/javascript" src="js/jquery.custom-select.js"></script>
<script src="js/script.js"></script>

<!--<script src="js/less.min.js" ></script> -->
</body>
</html>