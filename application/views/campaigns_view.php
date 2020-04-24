<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Campaigns</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/custom.css?">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/animsition/animsition.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/switchery/switchery.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/waves/waves.minfd53.css?v4.0.1">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/chartist/chartist.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/jvectormap/jquery-jvectormap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.css?v4.0.1">

	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/dashboard/v1.minfd53.css?v4.0.1">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/material-design/material-design.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/ionicons/ionicons.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1">
	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">


	<!--[if lt IE 9]>
	<script src="<?= base_url()?>global/vendor/html5shiv/html5shiv.min.js?v4.0.1"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="<?= base_url()?>global/vendor/media-match/media.match.min.js?v4.0.1"></script>
	<script src="<?= base_url()?>global/vendor/respond/respond.min.js?v4.0.1"></script>
	<![endif]-->

	<!-- Scripts -->
	<script src="<?= base_url()?>global/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega bg-orange-600"
	 role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
				data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span>
		</button>
		<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
				data-toggle="collapse">
			<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
			   data-animation="scale-up" role="button">
				<span class="avatar avatar-online">
					<img src="<?= base_url()?>global/portraits/avatar.jpg" alt="...">
					<i></i>
				</span>
			</a>
			<div class="dropdown-menu" role="menu">
				<a class="dropdown-item"> Fullname <br> Email</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
			</div>
		</button>
		<div class="navbar-brand navbar-brand-center">
			<img class="navbar-brand-logo" src="<?= base_url()?>assets1/images/logoteemarket.png" title="teemarket">
			<span class="navbar-brand-text hidden-xs-down"> teemarket</span>
		</div>
	</div>

	<div class="navbar-container container-fluid">
		<!-- Navbar Collapse -->
		<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
			<!-- Navbar Toolbar -->
			<ul class="nav navbar-toolbar">
				<li class="nav-item hidden-float" id="toggleMenubar">
					<a class="nav-link" data-toggle="menubar" role="button">
						<i class="icon hamburger hamburger-arrow-left">
							<span class="sr-only">Toggle menubar</span>
							<span class="hamburger-bar"></span>
						</i>
					</a>
				</li>
			</ul>
			<!-- End Navbar Toolbar -->

			<!-- Navbar Toolbar Right -->
			<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link navbar-avatar" data-toggle="dropdown" aria-expanded="false"
					   data-animation="scale-up" role="button">
					  	<span class="avatar avatar-online">
							<img src="<?= base_url()?>global/portraits/avatar.jpg" alt="...">
							<i></i>
					  	</span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item"> Fullname <br> Email</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
					</div>
				</li>
			</ul>
			<!-- End Navbar Toolbar Right -->
		</div>
		<!-- End Navbar Collapse -->

		<!-- Site Navbar Seach -->
		<div class="collapse navbar-search-overlap" id="site-navbar-search">
			<form role="search">
				<div class="form-group">
					<div class="input-search">
						<i class="input-search-icon md-search" aria-hidden="true"></i>
						<input type="text" class="form-control" name="site-search" placeholder="Search...">
						<button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
								data-toggle="collapse" aria-label="Close"></button>
					</div>
				</div>
			</form>
		</div>
		<!-- End Site Navbar Seach -->
	</div>
</nav>
<div class="site-menubar site-menubar-light site-menubar-dark">
	<div class="site-menubar-body">
		<div>
			<div>
				<ul class="site-menu" data-plugin="menu">
					<li class="site-menu-item active">
						<a href="<?= base_url()?>campaigns">
							<i class="site-menu-icon ion-md-shirt" aria-hidden="true"></i>
							<span class="site-menu-title">CAMPAIGNS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="<?= base_url()?>create">
							<i class="site-menu-icon ion-ios-create" aria-hidden="true"></i>
							<span class="site-menu-title">CREATE</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="index.html">
							<i class="site-menu-icon ion-md-cart" aria-hidden="true"></i>
							<span class="site-menu-title">ORDERS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="index.html">
							<i class="site-menu-icon ion-md-cash" aria-hidden="true"></i>
							<span class="site-menu-title">PAYOUTS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="index.html">
							<i class="site-menu-icon ion-md-settings" aria-hidden="true"></i>
							<span class="site-menu-title">SETTINGS</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- Page -->
<div class="page">
	<div class="page-content container-fluid">
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
					<div class="card-block p-20 pt-10">
						<div class="clearfix">
							<div class="grey-800 float-left py-10">
								<i class="icon md-account grey-600 font-size-24 vertical-align-bottom mr-5"></i>                  User
							</div>
							<span class="float-right grey-700 font-size-30">1,253</span>
						</div>
						<div class="mb-20 grey-500">
							<i class="icon md-long-arrow-up green-500 font-size-16"></i> 15%
							From this yesterday
						</div>
						<div class="ct-chart h-50"></div>
					</div>
				</div>
				<!-- End Widget Linearea One -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Two -->
				<div class="card card-shadow" id="widgetLineareaTwo">
					<div class="card-block p-20 pt-10">
						<div class="clearfix">
							<div class="grey-800 float-left py-10">
								<i class="icon md-flash grey-600 font-size-24 vertical-align-bottom mr-5"></i>                  VISITS
							</div>
							<span class="float-right grey-700 font-size-30">2,425</span>
						</div>
						<div class="mb-20 grey-500">
							<i class="icon md-long-arrow-up green-500 font-size-16"></i> 34.2%
							From this week
						</div>
						<div class="ct-chart h-50"></div>
					</div>
				</div>
				<!-- End Widget Linearea Two -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Three -->
				<div class="card card-shadow" id="widgetLineareaThree">
					<div class="card-block p-20 pt-10">
						<div class="clearfix">
							<div class="grey-800 float-left py-10">
								<i class="icon md-chart grey-600 font-size-24 vertical-align-bottom mr-5"></i>                  Total Clicks
							</div>
							<span class="float-right grey-700 font-size-30">1,864</span>
						</div>
						<div class="mb-20 grey-500">
							<i class="icon md-long-arrow-down red-500 font-size-16"></i> 15%
							From this yesterday
						</div>
						<div class="ct-chart h-50"></div>
					</div>
				</div>
				<!-- End Widget Linearea Three -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Four -->
				<div class="card card-shadow" id="widgetLineareaFour">
					<div class="card-block p-20 pt-10">
						<div class="clearfix">
							<div class="grey-800 float-left py-10">
								<i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom mr-5"></i>                  Items
							</div>
							<span class="float-right grey-700 font-size-30">845</span>
						</div>
						<div class="mb-20 grey-500">
							<i class="icon md-long-arrow-up green-500 font-size-16"></i> 18.4%
							From this yesterday
						</div>
						<div class="ct-chart h-50"></div>
					</div>
				</div>
				<!-- End Widget Linearea Four -->
			</div>

			<div class="col-xxl-7 col-lg-7">
				<!-- Widget Jvmap -->
				<div class="card card-shadow">
					<div class="card-block p-0">
						<div id="widgetJvmap" class="h-450"></div>
					</div>
				</div>
				<!-- End Widget Jvmap -->
			</div>

			<div class="col-xxl-5 col-lg-5">
				<!-- Widget Current Chart -->
				<div class="card card-shadow" id="widgetCurrentChart">
					<div class="p-30 white bg-green-500">
						<div class="font-size-20 mb-20">The current chart</div>
						<div class="ct-chart h-200">
						</div>
					</div>
					<div class="bg-white p-30 font-size-14">
						<div class="counter counter-lg text-left">
							<div class="counter-label mb-5">Approve rate are above average</div>
							<div class="counter-number-group">
								<span class="counter-number">12,673</span>
								<span class="counter-number-related text-uppercase font-size-14">pcs</span>
							</div>
						</div>
						<button type="button" class="btn-raised btn btn-info btn-floating">
							<i class="icon md-plus" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<!-- End Widget Current Chart -->
			</div>

			<div class="col-xl-4 col-lg-6">
				<!-- Widget User list -->
				<div class="card" id="widgetUserList">
					<div class="card-header cover overlay">
						<img class="cover-image h-200" src="<?= base_url()?>assets1/examples/images/dashboard-header.jpg"
							 alt="..." />
						<div class="overlay-panel vertical-align overlay-background">
							<div class="vertical-align-middle">
								<a class="avatar avatar-100 float-left mr-20" href="javascript:void(0)">
									<img src="<?= base_url()?>global/portraits/5.jpg" alt="">
								</a>
								<div class="float-left">
									<div class="font-size-20">Robin Ahrens</div>
									<p class="mb-20 text-nowrap">
										<span class="text-break"><a href="https://getbootstrapadmin.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e48985878c8d8081978d838aa48389858d88">[email&#160;protected]</a></span>
									</p>
									<div class="text-nowrap font-size-18">
										<a href="#" class="white mr-10">
											<i class="icon bd-twitter"></i>
										</a>
										<a href="#" class="white mr-10">
											<i class="icon bd-facebook"></i>
										</a>
										<a href="#" class="white">
											<i class="icon bd-dribbble"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-block py-0">
						<ul class="list-group list-group-full list-group-dividered mb-0">
							<li class="list-group-item">
								<div class="media">
									<div class="pr-20">
										<a class="avatar avatar-lg" href="javascript:void(0)">
											<img class="img-responsive" src="<?= base_url()?>global/portraits/1.jpg"
												 alt="...">
										</a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-5">Herman Beck</h5>
										<small>San Francisco</small>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class="media">
									<div class="pr-20">
										<a class="avatar avatar-lg" href="javascript:void(0)">
											<img class="img-responsive" src="<?= base_url()?>global/portraits/2.jpg"
												 alt="...">
										</a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-5">Mary Adams</h5>
										<small>Salt Lake City, Utah</small>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class="media">
									<div class="pr-20">
										<a class="avatar avatar-lg" href="javascript:void(0)">
											<img class="img-responsive" src="<?= base_url()?>global/portraits/3.jpg"
												 alt="...">
										</a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-5">Caleb Richards</h5>
										<small>Basking Ridge, NJ</small>
									</div>
								</div>
							</li>
						</ul>
						<button type="button" class="btn-raised btn btn-danger btn-floating">
							<i class="icon md-plus" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<!-- End Widget User list -->
			</div>

			<div class="col-xl-4 col-lg-6">
				<!-- Widget Chat -->
				<div class="card card-shadow" id="chat">
					<div class="card-header bg-white px-0">
						<a class="float-left" href="javascript:void(0)">
							<i class="icon md-chevron-left" aria-hidden="true"></i>
						</a>
						<div class="text-right">
							Conversation with
							<span class="hidden-xs-down">June Lane</span>
							<a class="avatar ml-10" data-toggle="tooltip" href="#" data-placement="right" title="June Lane">
								<img src="<?= base_url()?>global/portraits/4.jpg" alt="...">
							</a>
						</div>
					</div>
					<div class="card-block">
						<div class="chats">
							<div class="chat chat-left">
								<div class="chat-avatar">
									<a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
										<img src="<?= base_url()?>global/portraits/5.jpg" alt="Edward Fletcher">
									</a>
								</div>
								<div class="chat-body">
									<div class="chat-content" data-toggle="tooltip" title="11:37:08 am">
										<p>Good morning, sir.</p>
										<p>What can I do for you?</p>
									</div>
								</div>
							</div>
							<div class="chat">
								<div class="chat-avatar">
									<a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
										<img src="<?= base_url()?>global/portraits/4.jpg" alt="June Lane">
									</a>
								</div>
								<div class="chat-body">
									<div class="chat-content" data-toggle="tooltip" title="11:39:57 am">
										<p>Well, I am just looking around.</p>
									</div>
								</div>
							</div>
							<div class="chat chat-left">
								<div class="chat-avatar">
									<a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
										<img src="<?= base_url()?>global/portraits/5.jpg" alt="Edward Fletcher">
									</a>
								</div>
								<div class="chat-body">
									<div class="chat-content" data-toggle="tooltip" title="11:40:10 am">
										<p>If necessary, please ask me.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer bg-white">
						<form>
							<div class="input-group form-material">
                  <span class="input-group-btn">
                    <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-camera"></a>
                  </span>
								<input class="form-control" type="text" placeholder="Type message here ...">
								<span class="input-group-btn">
                    <button class="btn btn-pure btn-default icon md-mail-send" type="button"></button>
                  </span>
							</div>
						</form>
					</div>
				</div>
				<!-- End Widget Chat -->
			</div>

			<div class="col-xl-4 col-lg-6">
				<!-- Widget Info -->
				<div class="card card-shadow">
					<div class="card-header cover overlay">
						<div class="cover-background h-200" style="background-image: url('<?= base_url()?>global/photos/focus-4-960x480.jpg')"></div>
					</div>
					<div class="card-block px-30 py-20" style="height:calc(100% - 250px);">
						<div class="mb-10" style="margin-top: -70px;">
							<a class="avatar avatar-100 bg-white img-bordered" href="javascript:void(0)">
								<img src="<?= base_url()?>global/portraits/2.jpg" alt="">
							</a>
						</div>
						<div class="mb-20">
							<div class="font-size-20">Caleb Richards</div>
							<div class="font-size-14 grey-500">
								<span>2 hours ago</span> |
								<span>Comments 20</span>
							</div>
						</div>
						<p>
							Lorem ipsum dolLorem ip sum dolor sit amet, consectetur adipiscing elit. Integer
							nec odio. Praesent libero.or sit amet, consectetur adipiscing elit.
							Integer nec odio. Praesent libero.
						</p>
					</div>
				</div>
				<!-- End Widget Info -->
			</div>

			<div class="col-xxl-5 col-lg-6">
				<!-- Panel Projects -->
				<div class="panel" id="projects">
					<div class="panel-heading">
						<h3 class="panel-title">Projects</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
								<td>Projects</td>
								<td>Completed</td>
								<td>Date</td>
								<td>Actions</td>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>The sun climbing plan</td>
								<td>
									<span data-plugin="peityPie" data-skin="red">7/10</span>
								</td>
								<td>Jan 1, 2017</td>
								<td>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Edit">
										<i class="icon md-wrench" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Delete">
										<i class="icon md-close" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							<tr>
								<td>Lunar probe project</td>
								<td>
									<span data-plugin="peityPie" data-skin="blue">3/10</span>
								</td>
								<td>Feb 12, 2017</td>
								<td>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Edit">
										<i class="icon md-wrench" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Delete">
										<i class="icon md-close" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							<tr>
								<td>Dream successful plan</td>
								<td>
									<span data-plugin="peityPie" data-skin="green">9/10</span>
								</td>
								<td>Apr 9, 2017</td>
								<td>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Edit">
										<i class="icon md-wrench" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Delete">
										<i class="icon md-close" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							<tr>
								<td>Office automatization</td>
								<td>
									<span data-plugin="peityPie" data-skin="orange">5/10</span>
								</td>
								<td>May 15, 2017</td>
								<td>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Edit">
										<i class="icon md-wrench" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Delete">
										<i class="icon md-close" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							<tr>
								<td>Open strategy</td>
								<td>
									<span data-plugin="peityPie" data-skin="brown">2/10</span>
								</td>
								<td>Jun 2, 2017</td>
								<td>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Edit">
										<i class="icon md-wrench" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
											data-toggle="tooltip" data-original-title="Delete">
										<i class="icon md-close" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Panel Projects -->
			</div>

			<div class="col-xxl-7 col-lg-6">
				<!-- Panel Projects Status -->
				<div class="panel" id="projects-status">
					<div class="panel-heading">
						<h3 class="panel-title">
							Projects Status
							<span class="badge badge-pill badge-info">5</span>
						</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
								<td>ID</td>
								<td>Project</td>
								<td>Status</td>
								<td class="text-left">Progress</td>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>619</td>
								<td>The sun climbing plan</td>
								<td>
									<span class="badge badge-primary">Developing</span>
								</td>
								<td>
									<span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,5,2</span>
								</td>
							</tr>
							<tr>
								<td>620</td>
								<td>Lunar probe project</td>
								<td>
									<span class="badge badge-warning">Design</span>
								</td>
								<td>
									<span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
								</td>
							</tr>
							<tr>
								<td>621</td>
								<td>Dream successful plan</td>
								<td>
									<span class="badge badge-info">Testing</span>
								</td>
								<td>
									<span data-plugin="peityLine">2,3,-1,-3,-1,0,2,4,5,3</span>
								</td>
							</tr>
							<tr>
								<td>622</td>
								<td>Office automatization</td>
								<td>
									<span class="badge badge-danger">Canceled</span>
								</td>
								<td>
									<span data-plugin="peityLine">1,-2,0,2,4,5,3,2,4,2</span>
								</td>
							</tr>
							<tr>
								<td>623</td>
								<td>Open strategy</td>
								<td>
									<span class="badge badge-default">Reply waiting</span>
								</td>
								<td>
									<span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Panel Projects Stats -->
			</div>

		</div>
	</div>
</div>
<!-- End Page -->


<!-- Footer -->
<footer class="site-footer">
	<div class="site-footer-legal">© 2020 <span style="color: #212121">tee</span><span style="color:#fb8c00;">market</span></div>
	<div class="site-footer-right">
		Crafted with <i class="red-600 icon md-favorite"></i> by Creation Studio
	</div>
</footer>
<!-- Core  -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/jquery/jquery.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/popper-js/umd/popper.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/animsition/animsition.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/waves/waves.minfd53.js?v4.0.1"></script>

<!-- Plugins -->
<script src="<?= base_url()?>global/vendor/switchery/switchery.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/intro-js/intro.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/screenfull/screenfull.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1"></script>

<!-- Plugins For This Page -->
<script src="<?= base_url()?>global/vendor/chartist/chartist.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/jvectormap/jquery-jvectormap.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-enfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/peity/jquery.peity.minfd53.js?v4.0.1"></script>

<!-- Scripts -->
<script src="<?= base_url()?>global/js/State.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Component.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Base.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Config.minfd53.js?v4.0.1"></script>

<script src="<?= base_url()?>assets1/js/Section/Menubar.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/js/Section/Sidebar.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/js/Section/PageAside.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/js/Plugin/menu.minfd53.js?v4.0.1"></script>

<!-- Config -->
<script src="<?= base_url()?>global/js/config/colors.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/js/config/tour.minfd53.js?v4.0.1"></script>
<script>
	Config.set('<?= base_url()?>assets1', '<?= base_url()?>assets1');
</script>

<!-- Page -->
<script src="<?= base_url()?>assets1/js/Site.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/asscrollable.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/slidepanel.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/switchery.minfd53.js?v4.0.1"></script>

<script src="<?= base_url()?>global/js/Plugin/matchheight.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/jvectormap.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/peity.minfd53.js?v4.0.1"></script>


<script src="<?= base_url()?>assets1/examples/js/dashboard/v1.minfd53.js?v4.0.1"></script>


<!-- Google Analytics -->
<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
		'ga');

	ga('create', 'UA-65522665-1', 'auto');
	ga('send', 'pageview');
</script>
</body>

</html>
