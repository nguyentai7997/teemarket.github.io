<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket - Orders</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/custom.css?">

	<!-- Skin tools (demo site only) -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/skintools.minfd53.css?v4.0.1">
	<script src="<?= base_url()?>assets1/js/Plugin/skintools.minfd53.js?v4.0.1"></script>

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
	<link rel="stylesheet" href="<?= base_url()?>global/fonts/web-icons/web-icons.minfd53.css">
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
<body class="animsition">
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
						<a href="campaigns">
							<i class="site-menu-icon ion-md-shirt" aria-hidden="true"></i>
							<span class="site-menu-title">CAMPAIGNS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="create">
							<i class="site-menu-icon ion-ios-create" aria-hidden="true"></i>
							<span class="site-menu-title">CREATE</span>
						</a>
					</li>
					<li class="site-menu-item active">
						<a href="orders">
							<i class="site-menu-icon ion-md-cart" aria-hidden="true"></i>
							<span class="site-menu-title">ORDERS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="payment">
							<i class="site-menu-icon fa-money" aria-hidden="true"></i>
							<span class="site-menu-title">PAYMENT</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="account">
							<i class="site-menu-icon fa-user" aria-hidden="true"></i>
							<span class="site-menu-title">ACCOUNT</span>
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
		<!-- Panel Table Tools -->
		<div class="panel">
			<header class="panel-heading">
				<h3 class="panel-title">All (44)</h3>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
					<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Kate</td>
						<td>5516 Adolfo Rode</td>
						<td>Littelhaven</td>
						<td>26</td>
						<td>2014/06/13</td>
						<td>$635,852</td>
					</tr>
					<tr>
						<td>Torrey</td>
						<td>3658 Richie Street</td>
						<td>West Sedrickstad</td>
						<td>28</td>
						<td>2014/09/12</td>
						<td>$243,577</td>
					</tr>
					<tr>
						<td>Jolin</td>
						<td>39 Hirthe Squares</td>
						<td>Ryleetown</td>
						<td>17</td>
						<td>2013/09/27</td>
						<td>$784,802</td>
					</tr>
					<tr>
						<td>Wilhelmine</td>
						<td>054 O&#x27;Hara Union</td>
						<td>Dibbertfurt</td>
						<td>35</td>
						<td>2013/06/28</td>
						<td>$254,987</td>
					</tr>
					<tr>
						<td>Hubeen</td>
						<td>8884 Jamel Pines</td>
						<td>Howemouth</td>
						<td>51</td>
						<td>2013/05/28</td>
						<td>$584,032</td>
					</tr>
					<tr>
						<td>Gerhold</td>
						<td>098 Noel Way</td>
						<td>Santinoland</td>
						<td>19</td>
						<td>2014/12/12</td>
						<td>$145,088</td>
					</tr>
					<tr>
						<td>Chester</td>
						<td>14095 Kling Gateway</td>
						<td>Andresmouth</td>
						<td>21</td>
						<td>2014/09/27</td>
						<td>$177,404</td>
					</tr>
					<tr>
						<td>Melany</td>
						<td>1100 Steve Pines</td>
						<td>Immanuelfort</td>
						<td>12</td>
						<td>2014/06/28</td>
						<td>$162,453</td>
					</tr>
					<tr>
						<td>Thea</td>
						<td>26114 Narciso Lodge</td>
						<td>East Opal</td>
						<td>64</td>
						<td>2014/11/12</td>
						<td>$581,736</td>
					</tr>
					<tr>
						<td>Kreiger</td>
						<td>111 Hershel Stream</td>
						<td>Hermannborough</td>
						<td>36</td>
						<td>2013/11/27</td>
						<td>$921,021</td>
					</tr>
					<tr>
						<td>Shanel</td>
						<td>7579 Santa Forest</td>
						<td>Jordaneville</td>
						<td>14</td>
						<td>2017/04/28</td>
						<td>$818,20</td>
					</tr>
					<tr>
						<td>Mueller</td>
						<td>083 Kshlerin Forest</td>
						<td>Clintmouth</td>
						<td>18</td>
						<td>2013/10/12</td>
						<td>$571,46</td>
					</tr>
					<tr>
						<td>Clementina</td>
						<td>5957 Hagenes Falls</td>
						<td>Anaishaven</td>
						<td>45</td>
						<td>2013/11/12</td>
						<td>$684,588</td>
					</tr>
					<tr>
						<td>Johanna</td>
						<td>4301 Trever Radial</td>
						<td>Lake Augustineton</td>
						<td>67</td>
						<td>2013/12/27</td>
						<td>$608,507</td>
					</tr>
					<tr>
						<td>Elliottr</td>
						<td>8417 Orion Parkway</td>
						<td>Streichside</td>
						<td>34</td>
						<td>2014/08/28</td>
						<td>$447,592</td>
					</tr>
					<tr>
						<td>Yasmine</td>
						<td>67284 Kreiger Freeway</td>
						<td>Stoltenbergside</td>
						<td>18</td>
						<td>2014/12/12</td>
						<td>$358,369</td>
					</tr>
					<tr>
						<td>AdaHoppe</td>
						<td>69842 Peyton Viaduct</td>
						<td>South Geovannyburgh</td>
						<td>36</td>
						<td>2013/05/13</td>
						<td>$211,76</td>
					</tr>
					<tr>
						<td>Sammie</td>
						<td>46406 Powlowski Common</td>
						<td>Cristmouth</td>
						<td>51</td>
						<td>2014/03/29</td>
						<td>$345,739</td>
					</tr>
					<tr>
						<td>Terrance</td>
						<td>1568 Richmond Bypass</td>
						<td>Schillerfort</td>
						<td>46</td>
						<td>2014/10/27</td>
						<td>$634,073</td>
					</tr>
					<tr>
						<td>August</td>
						<td>731 Stiedemann Crossing</td>
						<td>Rolfsonborough</td>
						<td>36</td>
						<td>2013/11/12</td>
						<td>$203,952</td>
					</tr>
					<tr>
						<td>Mckenna</td>
						<td>63204 Hegmann Keys</td>
						<td>New Isobelview</td>
						<td>2</td>
						<td>2013/08/12</td>
						<td>$702,091</td>
					</tr>
					<tr>
						<td>Adrianna</td>
						<td>75151 Kshlerin Square</td>
						<td>North Elwynfurt</td>
						<td>25</td>
						<td>2014/02/26</td>
						<td>$481,980</td>
					</tr>
					<tr>
						<td>Heath</td>
						<td>6778 Howe Route</td>
						<td>Antwanbury</td>
						<td>32</td>
						<td>2013/08/12</td>
						<td>$569,723</td>
					</tr>
					<tr>
						<td>Alisa</td>
						<td>64838 D&#x27;Amore Cove</td>
						<td>Port Lempi</td>
						<td>25</td>
						<td>2017/04/28</td>
						<td>$226,459</td>
					</tr>
					<tr>
						<td>Treva</td>
						<td>308 Octavia Roads</td>
						<td>East Eunaton</td>
						<td>37</td>
						<td>2014/12/12</td>
						<td>$746,921</td>
					</tr>
					<tr>
						<td>Nicolas</td>
						<td>760 Hickle Causeway</td>
						<td>Lake Nickolasshire</td>
						<td>69</td>
						<td>2014/05/13</td>
						<td>$293,786</td>
					</tr>
					<tr>
						<td>Gerhard</td>
						<td>893 Mara Parkway</td>
						<td>Elmermouth</td>
						<td>32</td>
						<td>2014/11/27</td>
						<td>$856,275</td>
					</tr>
					<tr>
						<td>Monica</td>
						<td>0039 Heath Plain</td>
						<td>West Bentonhaven</td>
						<td>46</td>
						<td>2017/05/13</td>
						<td>$821,600</td>
					</tr>
					<tr>
						<td>Lacey</td>
						<td>995 Lang Springs</td>
						<td>Cordellburgh</td>
						<td>41</td>
						<td>2014/11/27</td>
						<td>$990,291</td>
					</tr>
					<tr>
						<td>Bret</td>
						<td>282 Susana Heights</td>
						<td>Kaneport</td>
						<td>47</td>
						<td>2013/05/28</td>
						<td>$445,494</td>
					</tr>
					<tr>
						<td>Jennie</td>
						<td>755 Greyson Key</td>
						<td>East Jazmyne</td>
						<td>52</td>
						<td>2017/03/29</td>
						<td>$530,408</td>
					</tr>
					<tr>
						<td>Emerson</td>
						<td>784 Adriel Radial</td>
						<td>New Jerroldland</td>
						<td>4</td>
						<td>2014/02/26</td>
						<td>$805,823</td>
					</tr>
					<tr>
						<td>Herta</td>
						<td>7491 Bednar Gardens</td>
						<td>Port Lucianoton</td>
						<td>23</td>
						<td>2013/10/12</td>
						<td>$352,269</td>
					</tr>
					<tr>
						<td>Deckow</td>
						<td>6440 Moen Loop</td>
						<td>Jenningsbury</td>
						<td>23</td>
						<td>2014/07/28</td>
						<td>$219,573</td>
					</tr>
					<tr>
						<td>Davin</td>
						<td>50922 Kiara Square</td>
						<td>Port Edmund</td>
						<td>37</td>
						<td>2014/11/27</td>
						<td>$241,432</td>
					</tr>
					<tr>
						<td>Johnathan</td>
						<td>1998 Webster Fords</td>
						<td>East Vern</td>
						<td>50</td>
						<td>2014/09/12</td>
						<td>$290,875</td>
					</tr>
					<tr>
						<td>Gunnar</td>
						<td>92873 Barney Club</td>
						<td>Beierview</td>
						<td>82</td>
						<td>2014/03/29</td>
						<td>$569,778</td>
					</tr>
					<tr>
						<td>Raina</td>
						<td>828 Cathy Streets</td>
						<td>West Uriahville</td>
						<td>26</td>
						<td>2013/09/27</td>
						<td>$186,229</td>
					</tr>
					<tr>
						<td>Marjorie</td>
						<td>314 Aurore Canyon</td>
						<td>Port Jaquelineburgh</td>
						<td>3</td>
						<td>2014/06/28</td>
						<td>$547,752</td>
					</tr>
					<tr>
						<td>Citlalli</td>
						<td>139 Ebert Freeway</td>
						<td>Lake Esperanzamouth</td>
						<td>78</td>
						<td>2017/01/27</td>
						<td>$892,012</td>
					</tr>
					<tr>
						<td>Ruben</td>
						<td>02868 Cronin Tunnel</td>
						<td>Rossieville</td>
						<td>87</td>
						<td>2013/09/12</td>
						<td>$520,483</td>
					</tr>
					<tr>
						<td>Jakubowski</td>
						<td>80391 Maxwell Parks</td>
						<td>South Travon</td>
						<td>26</td>
						<td>2014/03/29</td>
						<td>$272,005</td>
					</tr>
					<tr>
						<td>Josephine</td>
						<td>36238 Satterfield Avenue</td>
						<td>New Alexanderhaven</td>
						<td>51</td>
						<td>2017/01/27</td>
						<td>$189,18</td>
					</tr>
					<tr>
						<td>Ceasar</td>
						<td>2795 Clement Ridges</td>
						<td>Beckerhaven</td>
						<td>78</td>
						<td>2013/11/27</td>
						<td>$958,117</td>
					</tr>
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

<script src="<?= base_url()?>global/js/Plugin/datatables.minfd53.js?v4.0.1"></script>


<script src="<?= base_url()?>assets1/examples/js/tables/datatable.minfd53.js?v4.0.1"></script>
<script src="<?= base_url()?>assets1/examples/js/uikit/icon.minfd53.js?v4.0.1"></script>

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

<script>
	$('.logout').click(function(event) {
		window.location.href = 'http://localhost:8012/teemarket/logout';
	});
</script>
</body>

</html>
