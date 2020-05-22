<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Create</title>

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
						<a class="create">
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
							<div class="pearl current col-4">
								<div class="pearl-icon"><i class="icon ion-ios-shirt" aria-hidden="true"></i></div>
								<span class="pearl-title">Design</span>
							</div>
							<div class="pearl col-4">
								<div class="pearl-icon"><i class="icon fa-tags" aria-hidden="true"></i></div>
								<span class="pearl-title">Pricing & Products</span>
							</div>
							<div class="pearl col-4">
								<div class="pearl-icon"><i class="icon fa-rocket" aria-hidden="true"></i></div>
								<span class="pearl-title">Launch</span>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<div class="box-upload mt-40">
									<h4>Upload Image</h4>
									<input type="file" id="file-input">
								</div>
							</div>
							<div class="col-6">
								<div id="view-front" class="labView m-auto">
									<div class="product-design designer-style-front">
										<img class="front-tshirt" src="<?= base_url() ?>global/portraits/mens-crew-front-new.png" alt="">
									</div>
									<div class="design-area design-area-front" style="height: 304px; width: 218px; left: 156px; top: 115px; z-index: 1; overflow: hidden;">
										<div class="image_design" style="width: 216px; height: 373px">
											<div class="result"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="dg-box profile-usermenu">
									<div class="product-info">
										<div class="form-group product-fields custom-form-group product-color-container">
											<label for="fields">Choose Product Color</label>
										</div>
										<div class="list-colors product-color-list" id="product-list-colors">
											<span class="bg-colors white active" style="background-color: rgb(252, 252, 252);"></span>
											<span class="bg-colors sand" style="background-color: rgb(255, 233, 186);"></span>
											<span class="bg-colors light-pink" style="background-color: rgb(255, 178, 196);"></span>
											<span class="bg-colors ash-grey" style="background-color: rgb(214, 215, 217);"></span>
											<span class="bg-colors light-blue" style="background-color: rgb(140, 180, 232);"></span>
											<span class="bg-colors daisy" style="background-color: rgb(243, 254, 43);"></span>
											<span class="bg-colors gold" style="background-color: rgb(255, 181, 2);"></span>
											<span class="bg-colors tennessee-orange" style="background-color: rgb(255, 132, 0);"></span>
											<span class="bg-colors red" style="background-color: rgb(243, 0, 0);"></span>
											<span class="bg-colors sapphire" style="background-color: rgb(0, 97, 179);"></span>
											<span class="bg-colors electric-green" style="background-color: rgb(0, 172, 49);"></span>
											<span class="bg-colors black" style="background-color: rgb(11, 11, 11);"></span>
										</div>
										<div class="product-prices text-center">
											<div id="product-price">
												<h3 class="product-price-title">
													Base Cost
												</h3>
												<div class="clearfix">
													<div class="product-price-list">
														<span id="product-price-sale" class="text-success font-lg bold">
															<span class="price-sale-number">$5.00</span>
														</span>
													</div>
												</div>
											</div>
											<button type="button" class="btn btn-md" style="background-color: #fb8c00; color: white">
												<i class="fa fa-arrow-right"></i> Next
											</button>
										</div>
									</div>
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
<script src="<?= base_url()?>global/vendor/jquery-ui/jquery-ui.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-tmpl/tmpl.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-canvas-to-blob/canvas-to-blob.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-load-image/load-image.all.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileuploadfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-processfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-imagefd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-audiofd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-videofd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-validatefd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/blueimp-file-upload/jquery.fileupload-uifd53.js?v4.0.1"></script>
<script src="<?= base_url()?>global/vendor/dropify/dropify.minfd53.js?v4.0.1"></script>

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
<script src="<?= base_url()?>assets1/js/plus.js"></script>

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
