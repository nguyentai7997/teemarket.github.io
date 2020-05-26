<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Account</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/all.css?">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/account.css?">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/animsition/animsition.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/switchery/switchery.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/waves/waves.minfd53.css?v4.0.1">

	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url()?>assets1/examples/css/uikit/modals.minfd53.css?v4.0.1">

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
<body class="animsition site-menubar-unfold">
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
					<li class="site-menu-item active">
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
						<li class="active page-item settings_account"><a class="page-link" href="account">Account</a></li>
						<li class="page-item settings_payment"><a class="page-link" href="payment">Payment</a></li>
						<li class="page-item settings_payouts"><a class="page-link" href="payouts">Payouts</a></li>
					</ul>

				</div>
				<!-- End Example Pagination With Gap -->
			</div>
			<div class="col-xl-2 col-md-3 col-sm-2"></div>
		</div>
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-md-8 col-lg-8">
				<div class="panel-body container-fluid bg-white">
					<!-- Example Basic Form Without Label -->
					<div class="example-wrap">
						<h3 class="example-title">Information</h3>
						<div class="example">
							<div class="email">Email: tonixtai@gmail.com</div>
							<form>
								<div class="form-group form-material">
									<input type="text" class="form-control" name="fullname" placeholder="Full Name"
										   autocomplete="off" />
								</div>
								<div class="form-group form-material">
									<input type="text" class="form-control" name="publicname" placeholder="Public Name"
										   autocomplete="off" />
								</div>
								<div class="form-group form-material">
									<input type="text" class="form-control" name="address" placeholder="Address"
										   autocomplete="off" />
								</div>
								<div class="form-group form-material">
									<input type="text" class="form-control" name="ci_to" placeholder="City / Town"
										   autocomplete="off" />
								</div>
								<div class="row">
									<div class="form-group form-material col-md-8">
										<input type="text" class="form-control" name="st_pr_re" placeholder="State / Province / Region"
											   autocomplete="off" />
									</div>
									<div class="form-group form-material col-md-4">
										<input type="text" class="form-control" name="zipcode" placeholder="ZIP / Postal Code"
											   autocomplete="off" />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<div class="sort_label">Country</div>
										<select class="form-control">
											<option disabled selected>Country</option>
											<option>Newest to Oldest</option>
											<option>Oldest to Newest</option>
											<option>Top Selling</option>
											<option>Least Selling</option>
											<option>Sort A to Z</option>
											<option>Sort Z to A</option>
										</select>
									</div>
									<div class="form-group form-material col-md-6">
										<input type="text" class="form-control" name="phone" placeholder="Phone Number"
											   autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-primary">
										<i class="icon fa-save"></i>
										Save
									</button>
								</div>
							</form>
						</div>
					</div>
					<!-- End Example Basic Form Without Label -->
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="panel-body container-fluid bg-white">
					<!-- Example Basic Form Without Label -->
					<div class="example-wrap">
						<h3 class="example-title">Password</h3>
						<div class="example">
							<form>
								<div class="form-group form-material">
									<input type="password" class="form-control" id="current-pass" placeholder="Current Password" autocomplete="off" />
									<div class="error current-pass-required">The password field is required.</div>
								</div>
								<div class="form-group form-material">
									<input type="password" class="form-control" id="new-pass" placeholder="New Password" autocomplete="off" />
									<div class="error new-pass-required">The new password field is required.</div>
									<div class="error new-pass-error">The password field must contain 8 characters including at least one number and at least one alphabetic character.</div>
								</div>
								<div class="form-group form-material">
									<input type="password" class="form-control" id="cf-pass" placeholder="Confirm New Password" autocomplete="off" />
									<div class="error cf-pass-required">The password field is required.</div>
									<div class="error cf-pass-error">The password confirmation does not match.</div>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-primary change-password">
										<i class="icon fa-save"></i>Change Password
									</button>
								</div>
							</form>
						</div>
					</div>
					<!-- End Example Basic Form Without Label -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page -->

<!-- Modal -->
<div class="modal fade modal-success" id="exampleModalSuccess" aria-hidden="true"
	 aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Succes</h4>
			</div>
			<div class="modal-body">
				<p>You have successfully changed your password</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default close-modal" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<?php include("seller_footer_view.php") ?>

<!-- Core  -->
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

<script src="<?= base_url()?>assets1/examples/js/pages/faq.minfd53.js?v4.0.1"></script>

<!--nguyentai's js-->
<script src="<?= base_url()?>assets1/js/all.js"></script>
<script src="<?= base_url()?>assets1/js/account.js"></script>

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
