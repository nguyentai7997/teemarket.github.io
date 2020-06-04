<header class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-right">
				<div class="header-dropdown dropdown-expanded">
					<a href="#">Links</a>
					<div class="header-menu">
						<ul>
							<li><a href="<?= base_url()?>register">SIGN UP</a></li>
							<li><a href="<?= base_url()?>login">SIGN IN</a></li>
						</ul>
					</div><!-- End .header-menu -->
				</div><!-- End .header-dropown -->
			</div><!-- End .header-right -->
		</div><!-- End .container -->
	</div><!-- End .header-top -->

	<div class="header-middle sticky-header" style="border-bottom: 1px solid #eee;">
		<div class="container">
			<div class="header-left">


				<div class="header-search">
					<a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
					<div class="header-search-wrapper">
						<form action="#" method="get">
							<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
							<button class="btn" type="submit"><i class="icon-search"></i></button>
						</form>
					</div><!-- End .header-search-wrapper -->
				</div><!-- End .header-search -->
			</div><!-- End .header-left -->

			<div class="header-center">
				<a href="<?= base_url()?>" class="logo">
					<img src="<?= base_url()?>assets/images/teemarket.png" alt="Porto Logo">
				</a>
			</div><!-- End .headeer-center -->

			<div class="header-right">
				<div class="header-dropdowns" style="padding-right: 10px">
					<div class="header-dropdown">
						<a>SHOP BY</a>
						<div class="header-menu">
							<ul>
								<li><a href="">All</a></li>
								<?php foreach ($categorize as $key => $value) { ?>
									<li><a href="<?php echo $value['categorize'] ?>"><?php  echo $value['categorize']  ?></a></li>
								<?php } ?>
							</ul>
						</div><!-- End .header-menu -->
					</div><!-- End .header-dropown -->
				</div><!-- End .header-dropdowns -->
				<div class="dropdown cart-dropdown">
					<a href="<?= base_url() ?>cart" class="dropdown-toggle">
                        <span class="cart-count"><?php if(isset($_SESSION['product'])){echo count($_SESSION['product']);} else {echo "0";} ?></span>
					</a>
				</div>
				<!-- End .dropdown -->
			</div><!-- End .header-right -->
		</div><!-- End .container -->
	</div><!-- End .header-middle -->
</header><!-- End .header -->
