<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Setup New Campaign</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/animsition/animsition.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/switchery/switchery.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/waves/waves.minfd53.css?v4.0.1">

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
						<a class="campaigns">
							<i class="site-menu-icon ion-ios-shirt" aria-hidden="true"></i>
							<span class="site-menu-title">CAMPAIGNS</span>
						</a>
					</li>
					<li class="site-menu-item active">
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
			<div class="col-lg-12">
				<div class="panel-body container-fluid bg-white border">
					<!-- Example Default -->
					<div class="example-wrap">
						<div class="example">
							<div class="pearls row">
								<div class="pearl done col-4">
									<div class="pearl-icon"><i class="icon ion-ios-shirt" aria-hidden="true"></i></div>
									<span class="pearl-title">Design</span>
								</div>
								<div class="pearl done col-4">
									<div class="pearl-icon"><i class="icon fa-tags" aria-hidden="true"></i></div>
									<span class="pearl-title">Pricing & Products</span>
								</div>
								<div class="pearl current col-4">
									<div class="pearl-icon"><i class="icon fa-rocket" aria-hidden="true"></i></div>
									<span class="pearl-title">Launch</span>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="panel-body container-fluid bg-white">
										<!-- Example Basic Form Without Label -->
										<div class="example-wrap">
											<div class="example">
												<form action="#">
													<div class="form-group required-field">
														<label style="color: #fb8c00">Title</label>
														<input type="text" class="form-control title" required maxlength="80">
														<div class="text">Summarize your campaign in 80 characters or less</div>
													</div><!-- End .form-group -->

													<div class="form-group required-field">
														<label style="color: #fb8c00">Description</label>
														<textarea class="border description" rows="7" style="width: 100%"></textarea>
														<div class="text">Let your buyers know why they should buy your tee in 300 characters or less. You can also include info on the design or designer!</div>
													</div><!-- End .form-group -->

													<div class="form-group required-field">
														<label style="color: #fb8c00">URL</label>
														<div class="input-group">
															<span class="input-group-addon">http://localhost:8012/teemarket/<?php echo $_SESSION['user']['publicname']; ?></span>
															<input type="text" class="form-control url">
														</div>
														<div class="text">This is where you will send buyers to view your campaign.</div>
													</div>

													<div class="form-group required-field">
														<label style="color: #fb8c00">Categorize Your Campaign</label>
														<div class="select-custom">
															<select class="form-control" title='Choose one of the following...' name="categorize">
																<option value="" selected>Choose one of the following...</option>
																<optgroup label="Hobbies">
																	<option value="fishing">Fishing</option>
																	<option value="fitness">Fitness</option>
																	<option value="hunting">Hunting</option>
																	<option value="music">Music</option>
																</optgroup>
																<optgroup label="Sport">
																	<option value="football">Football</option>
																	<option value="basketball">Basketball</option>
																</optgroup>
															</select>
														</div><!-- End .select-custom -->
													</div><!-- End .form-group -->

													<div class="form-group required-field">
														<label style="color: #fb8c00">Campaign Length</label>
														<div class="input-daterange" data-plugin="datepicker">
															<div class="row">
																<div class="col-8">
																	<div class="input-group">
																		<span class="input-group-addon">End Date</span>
																		<input type="date" class="form-control end" name="end"/>
																	</div>
																</div>
																<div class="col-4">
																	<div class="input-group">
																		<span class="input-group-addon">Total Days</span>
																		<input disabled class="form-control total-days text-center" name="length" value="7 Days"/>
																	</div>
																</div>

															</div>
														</div>
													</div><!-- End .form-group -->
													<div class="buttonstep float-right mt-20">
														<button type="button" class="btn btn-md back_step">
															<i class="fa fa-arrow-left"></i> Back
														</button>
														<button type="button" class="btn btn-md next_step" style="background-color: #fb8c00; color: white">
															Launch <i class="fa fa-arrow-right"></i>
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
				</div>
				<!-- End Example Default -->
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
<script src="<?= base_url()?>global/vendor/jquery-placeholder/jquery.placeholder.minfd53.js?v4.0.1"></script>

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
<script src="<?= base_url()?>global/js/Plugin/jquery-placeholder.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/js/Plugin/input-group-file.minfd53.js?v4.0.1"></script>

<!--nguyentai's js-->
<script src="<?= base_url()?>assets1/js/all.js"></script>
<script src="<?= base_url()?>assets1/js/launch.js"></script>

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
