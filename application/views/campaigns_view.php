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
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/all.css?">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/animsition/animsition.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/switchery/switchery.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/waves/waves.minfd53.css?v4.0.1">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/c3/c3.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/bootstrap-table/bootstrap-table.minfd53.css?v4.0.1">

	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/dashboard/v1.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/structure/pagination.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/tables/basic.minfd53.css?v4.0.1">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/material-design/material-design.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/ionicons/ionicons.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/font-awesome/font-awesome.minfd53.css">
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

<?php include("seller_header_view.php") ?>

<div class="site-menubar site-menubar-light site-menubar-dark">
	<div class="site-menubar-body">
		<div>
			<div>
				<ul class="site-menu" data-plugin="menu">
					<li class="site-menu-item active">
						<a class="campaigns">
							<i class="site-menu-icon ion-ios-shirt" aria-hidden="true"></i>
							<span class="site-menu-title">CAMPAIGNS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="create-campaign">
							<i class="site-menu-icon fa-pencil-square" aria-hidden="true"></i>
							<span class="site-menu-title">CREATE</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="orders">
							<i class="site-menu-icon fa-shopping-cart" aria-hidden="true"></i>
							<span class="site-menu-title">ORDERS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="payouts">
							<i class="site-menu-icon fa-money" aria-hidden="true"></i>
							<span class="site-menu-title">PAYOUTS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="settings">
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
			<div class="col-xl-2 col-md-3 col-sm-2"></div>
				<div class="col-xl-8 col-md-6 col-sm-8">
				<!-- Pagination With Gap -->
					<div class="mt-20 mb-50">
							<ul class="pagination pagination-gap justify-content-center">
								<li class="active page-item today"><a class="page-link">Today<span class="sr-only">(current)</span></a></li>
								<li class="page-item yesterday"><a class="page-link">Yesterday</a></li>
								<li class="page-item days7"><a class="page-link">Last 7 Days</a></li>
								<li class="page-item days30"><a class="page-link">Last 30 Days</a></li>
								<li class="page-item alltime"><a class="page-link">All time</a></li>
								<li class="page-item customday"><a class="page-link">Custom</a></li>
							</ul>
						
					</div>
				<!-- End Example Pagination With Gap -->
				</div>
			<div class="col-xl-2 col-md-3 col-sm-2"></div>
		</div>
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-xl-4 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
					<div class="card-block bg-green-500 p-20 pt-10">
						<div class="clearfix text-white">
							<div class="float-right">
								<i class="icon fa-money font-size-40"></i>
							</div>
							<div class="font-size-20 font-weight-600">PROFIT</div>
							<div class="font-size-20">$0.00</div>
							<div class="mt-10 text-white">
								<div class="font-size-14">AVAILABLE PAYOUT:</div>
								<div class="font-size-14">$0.00</div>
							</div>
						</div>

					</div>
				</div>
				<!-- End Widget Linearea One -->
			</div>

			<div class="col-xl-4 col-md-6">
				<!-- Widget Linearea Two-->
				<div class="card card-shadow" id="widgetLineareaTwo">
					<div class="card-block bg-cyan-500 p-20 pt-10">
						<div class="clearfix text-white">
							<div class="float-right">
								<i class="icon fa-shopping-cart font-size-40"></i>
							</div>
							<div class="font-size-20 font-weight-600">ORDERS/UNITS</div>
							<div class="font-size-20">0/0</div>
						</div>
					</div>
				</div>
				<!-- End Widget Linearea Two -->
			</div>

			<div class="col-xl-4 col-md-6">
				<!-- Widget Linearea Three-->
				<div class="card card-shadow" id="widgetLineareaOne">
					<div class="card-block bg-orange-600 p-20 pt-10">
						<div class="clearfix text-white">
							<div class="float-right">
								<i class="icon ion-ios-shirt font-size-40"></i>
							</div>
							<div class="font-size-20 font-weight-600">CAMPAIGNS</div>
							<div class="font-size-20">0</div>
						</div>
					</div>
				</div>
				<!-- End Widget Linearea Three -->
			</div>

			<div class="col-lg-12">
				<!-- Example C3 Timeseries -->
				<div class="example-wrap m-md-0">
					<div id="chart"></div>
				</div>
				<!-- End Example C3 Timeseries -->
			</div>

			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<div class="sort_label">Sort Campaigns By</div>
							<select class="form-control">
								<option>Newest to Oldest</option>
								<option>Oldest to Newest</option>
								<option>Top Selling</option>
								<option>Least Selling</option>
								<option>Sort A to Z</option>
								<option>Sort Z to A</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<div class="sort_label">Filter By Status</div>
							<select class="form-control">
								<option>All</option>
								<option>Active</option>
								<option>Starred</option>
								<option>Ended</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" name="" placeholder="Search campaigns by title">
								<span class="input-group-btn">
						  			<button type="submit" class="btn" style="background-color: #fb8c00"><i class="icon fa-search" aria-hidden="true"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Example Bordered Table -->
					<div class="table-responsive">
						<table class="table table-bordered bg-white">
							<tbody>
							<tr>
								<td>
									Name
								</td>
								<td class="text-center" width="12%">
									<div class="data_profit">$0.00</div>
									<div>Profit</div>
								</td>
								<td class="text-center" width="12%">
									<div class="data_orfers">0</div>
									<div>Orders</div>
								</td>
								<td class="text-center" width="12%">
									<div class="data_units">0</div>
									<div>Units</div>
								</td>
								<td class="text-center" width="12%">
									<div class="data_time">7</div>
									<div>Days Left</div>
								</td>
								<td class="text-nowrap text-center" width="12%">
									<button type="button" class="btn btn-sm btn-icon btn-flat">
										<i class="icon fa-ellipsis-h" aria-hidden="true"></i>
									</button>
									<div>Option</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				<!-- End Example Bordered Table -->
			</div>

		</div>
	</div>
</div>
<!-- End Page -->

<?php include("seller_footer_view.php") ?>

<!-- Core  -->
<script data-cfasync="false" src="<?= base_url()?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url()?>global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1"></script>
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
<script src="<?= base_url()?>global/vendor/aspaginator/jquery-asPaginator.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/c3/c3.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/d3/d3.minfd53.js?v4.0.1"></script>

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

<script src="<?= base_url()?>global/js/Plugin/aspaginator.minfd53.js?v4.0.1"></script>

<script src="<?= base_url()?>assets1/examples/js/dashboard/v1.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/examples/js/charts/c3.minfd53.js?v4.0.1"></script>

<!--nguyentai's js-->
<script src="<?= base_url()?>assets1/js/all.js"></script>
<script src="<?= base_url()?>assets1/js/campaigns.js"></script>

<!-- Google Analytics -->
<!--<script>-->
<!--	(function(i, s, o, g, r, a, m) {-->
<!--		i['GoogleAnalyticsObject'] = r;-->
<!--		i[r] = i[r] || function() {-->
<!--			(i[r].q = i[r].q || []).push(arguments)-->
<!--		}, i[r].l = 1 * new Date();-->
<!--		a = s.createElement(o),-->
<!--			m = s.getElementsByTagName(o)[0];-->
<!--		a.async = 1;-->
<!--		a.src = g;-->
<!--		m.parentNode.insertBefore(a, m)-->
<!--	})(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',-->
<!--		'ga');-->
<!---->
<!--	ga('create', 'UA-65522665-1', 'auto');-->
<!--	ga('send', 'pageview');-->
<!--</script>-->

</body>

</html>
