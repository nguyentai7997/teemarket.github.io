<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>teemarket Admin | Orders</title>

	<link rel="apple-touch-icon" href="<?= base_url()?>assets1/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?= base_url()?>assets1/images/favicon-teemarket.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/css/bootstrap-extend.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/site.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>assets1/css/admin.css?">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/animsition/animsition.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/switchery/switchery.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
	<link rel="stylesheet" href="<?= base_url()?>global/vendor/waves/waves.minfd53.css?v4.0.1">

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
<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php include("admin_header_view.php") ?>

<div class="site-menubar site-menubar-light">
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
						<a class="mockups">
							<i class="site-menu-icon md-palette" aria-hidden="true"></i>
							<span class="site-menu-title">MOCKUPS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="categories">
							<i class="site-menu-icon md-widgets" aria-hidden="true"></i>
							<span class="site-menu-title">CATEGORIES</span>
						</a>
					</li>
					<li class="site-menu-item active">
						<a class="orders">
							<i class="site-menu-icon fa-shopping-cart" aria-hidden="true"></i>
							<span class="site-menu-title">ORDERS</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="users">
							<i class="site-menu-icon fa-users" aria-hidden="true"></i>
							<span class="site-menu-title">USERS</span>
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
			<header class="panel-heading panel-title">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<h3 class="example-title">All (<?php echo count($orders)?>)</h3>
					</div>
				</div>
				<hr>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped w-full text-center" id="example">
					<thead>
					<tr>
						<th>OID</th>
						<th>Time</th>
						<th>CID</th>
						<th>Email</th>
						<th>Country</th>
						<th>Items</th>
						<th>Base Cost</th>
						<th>Profit</th>
						<th>Flags</th>
<!--						<th>Edit</th>-->
					</tr>
					<tbody>
					<?php foreach ($orders as $key => $value) { ?>
						<tr>
							<td><?php echo $value['id']?></td>
							<td><?php echo $value['time']?></td>
							<td><?php echo $value['id_campaign']?></td>
							<td><?php echo $value['email']?></td>
							<td><?php echo $value['country']?></td>
							<td><?php echo $value['quantity']?></td>
							<td>$7.50</td>
							<td>$<?php echo number_format($value['quantity'] * 7.50,2)?></td>
							<td style="<?php if ($value['status']=='requested'){echo 'color: #64DD17';} else if($value['status']=='cancelled'){echo 'color: #f44336';}?>">
								<?php echo strtoupper($value['status'])?>
							</td>
<!--							<td>-->
<!--								<i class="fa fa-pencil-square edit-order" style="color: #3f51b5;cursor: pointer" aria-hidden="true">-->
<!--									<input type="text" value="--><?php //echo $value['id'].'-'.$value['status']?><!--" class="sr-only">-->
<!--								</i>-->
<!--							</td>-->
						</tr>
					<?php } ?>
					</tbody>
					</thead>
				</table>
			</div>
		</div>
		<!-- End Panel Table Tools -->
	</div>
</div>
<!-- End Page -->

<!-- Modal edit -->
<!--<div class="modal fade modal-warning modal-edit" id="exampleModalWarning" aria-hidden="true" style="top: 25%"-->
<!--	 aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">-->
<!--	<div class="modal-dialog">-->
<!--		<div class="modal-content">-->
<!--			<div class="modal-body text-center pt-10 pl-100 pr-100">-->
<!--				<h3><strong>Edit Order ID = <span class="order-id"></span></strong></h3>-->
<!--				<div class="form-group required-field">-->
<!--					<div class="select-custom">-->
<!--						<select class="form-control" title='Choose one of the following...' name="status"></select>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="modal-footer pl-100 pr-100 ">-->
<!--				<button type="button" class="btn btn-default edit" data-dismiss="modal" style="width: 100%;background-color: #fb8c00;color: #fff">Edit</button>-->
<!--				<button type="button" class="btn btn-dark cancel-edit" data-dismiss="modal" style="width: 100%">Cancel</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- End Modal -->

<!-- Modal request success -->
<!--<div class="modal fade modal-warning edit-success" id="exampleModalWarning" aria-hidden="true" style="top: 25%"-->
<!--	 aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">-->
<!--	<div class="modal-dialog">-->
<!--		<div class="modal-content">-->
<!--			<div class="modal-body text-center">-->
<!--				<i class="icon fa-check-circle-o" aria-hidden="true" style="font-size: 50px;color: #4caf50"></i>-->
<!--				<h3><strong>Update Success!</strong></h3>-->
<!--			</div>-->
<!--			<div class="modal-footer pl-100 pr-100">-->
<!--				<button type="button" class="btn btn-default close-modal" data-dismiss="modal" style="width: 100%;background-color: #4caf50;color: #fff">OK</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- End Modal -->

<?php include("admin_footer_view.php") ?>

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

<!--nguyentai's js-->
<script src="<?= base_url()?>assets1/js/admin.js"></script>

<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'csvHtml5',
			]
		} );
	} );
</script>
</body>

</html>
