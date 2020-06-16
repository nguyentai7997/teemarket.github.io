<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Payouts</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/all.css?">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-bs4/dataTables.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.minfd53.css?v4.0.1">

	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/tables/datatable.minfd53.css?v4.0.1">

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
					<li class="site-menu-item">
						<a class="_dashboard">
							<i class="site-menu-icon fa-dashboard" aria-hidden="true"></i>
							<span class="site-menu-title">DASHBOARD</span>
						</a>
					</li>
					<li class="site-menu-item">
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
					<li class="site-menu-item active">
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
						<li class="page-item settings_account"><a class="page-link" href="account">Account</a></li>
						<li class="page-item settings_payment"><a class="page-link" href="payment">Payment</a></li>
						<li class="active page-item settings_payouts"><a class="page-link" href="payouts">Payouts</a></li>
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
					<div class="card-block bg-purple-500 p-20 pt-10">
						<div class="clearfix text-white">
							<div class="float-right">
								<i class="icon ion-ios-radio-outline font-size-30"></i>
							</div>
							<div class="font-size-20 font-weight-600">Payouts Requested</div>
							<div class="font-size-20">$0.00</div>
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
								<i class="icon fa-check-circle font-size-30"></i>
							</div>
							<div class="font-size-20 font-weight-600">Payouts Available</div>
							<div class="font-size-20">$0.00</div>
						</div>
					</div>
				</div>
				<!-- End Widget Linearea Two -->
			</div>

			<div class="col-xl-4 col-md-6">
				<!-- Widget Linearea Four-->
				<div class="card card-shadow" id="widgetLineareaOne">
					<div class="card-block bg-green-500 p-20 pt-10">
						<div class="clearfix text-white">
							<div class="float-right">
								<i class="icon md-money-box font-size-30"></i>
							</div>
							<div class="font-size-20 font-weight-600">Total Paid</div>
							<div class="font-size-20">$0.00</div>
						</div>
					</div>
				</div>
				<!-- End Widget Linearea Four -->
			</div>

		</div>
		<!-- Panel Table Tools -->
		<div class="panel">
			<header class="panel-heading panel-title">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<h3 class="example-title">Campaigns Payouts (6)</h3>
					</div>
					<div class="col-xl-4 col-md-4 col-sm-4">
						<div class="mt-10">
							<ul class="pagination pagination-gap justify-content-center">
								<li class="active page-item settings_account"><a class="page-link" href="#">Available</a></li>
								<li class="page-item settings_payouts"><a class="page-link" href="#">Requested</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="float-right mt-10">
							<button type="button" class="btn btn-primary change-password">
								<i class="icon fa-save"></i> Total Payout
							</button>
						</div>
					</div>
				</div>
				<hr>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped w-full text-center" id="example">
					<thead>
					<tr>
						<th style="color: #0e0e0e">Date</th>
						<th style="color: #0e0e0e">Campaign</th>
						<th style="color: #0e0e0e">Amount</th>
						<th style="color: #0e0e0e">Status</th>
						<th style="color: #0e0e0e">CSV</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($orders as $key => $value) { ?>
						<tr>
							<td><?php echo ($value['time'])?></td>
							<td><?php echo $value['title']?></td>
							<td>$<?php echo number_format($value['quantity'] * $value['price'] - 7.50,2)?></td>
							<td><?php echo $value['status']?></td>
							<td>1 option</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- End Panel Table Tools -->
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
<script src="<?= base_url()?>global/vendor/datatables.net/jquery.dataTablesfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-bs4/dataTables.bootstrap4fd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-rowgroup/dataTables.rowGroup.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-scroller/dataTables.scroller.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-responsive/dataTables.responsive.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons/dataTables.buttons.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons/buttons.html5.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons/buttons.flash.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons/buttons.print.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons/buttons.colVis.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/asrange/jquery-asRange.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/bootbox/bootbox.minfd53.js?v4.0.1"></script>

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

<script src="<?= base_url()?>assets1/examples/js/tables/datatable.minfd53.js?v4.0.1"></script>

<!--nguyentai's js-->
<script src="<?= base_url()?>assets1/js/all.js"></script>

</body>

</html>
