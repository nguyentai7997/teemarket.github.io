<header class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-right">
				<div class="header-dropdown dropdown-expanded">
					<a href="#">Links</a>
					<div class="header-menu">
						<ul>
							<li><a href="<?= base_url()?>track_order">TRACK ORDER</a></li>
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
				<div class="header-dropdowns" style="padding-right: 10px">
					<div class="header-dropdown">
						<a href="#">SHOP BY</a>
						<div class="header-menu">
							<ul>
								<li><a href="#">ALL</a></li>
								<li><a href="#">BIRTHDAY</a></li>
							</ul>
						</div><!-- End .header-menu -->
					</div><!-- End .header-dropown -->

				</div><!-- End .header-dropdowns -->
				<button class="mobile-menu-toggler" type="button">
					<i class="icon-menu"></i>
				</button>
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
				<div class="dropdown cart-dropdown">
					<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
						<span class="cart-count">2</span><span>Items on bag</span>
					</a>

					<div class="dropdown-menu" >
						<div class="dropdownmenu-wrapper">
							<div class="dropdown-cart-products">
								<div class="product">
									<div class="product-details">
										<h4 class="product-title">
											<a href="product.html">Woman Ring</a>
										</h4>

										<span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $99.00
                                            </span>
									</div><!-- End .product-details -->

									<figure class="product-image-container">
										<a href="product.html" class="product-image">
											<img src="<?= base_url()?>assets/images/products/cart/product-1.jpg" alt="product">
										</a>
										<a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
									</figure>
								</div><!-- End .product -->

								<div class="product">
									<div class="product-details">
										<h4 class="product-title">
											<a href="product.html">Woman Necklace</a>
										</h4>

										<span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $35.00
                                            </span>
									</div><!-- End .product-details -->

									<figure class="product-image-container">
										<a href="product.html" class="product-image">
											<img src="<?= base_url()?>assets/images/products/cart/product-2.jpg" alt="product">
										</a>
										<a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
									</figure>
								</div><!-- End .product -->
							</div><!-- End .cart-product -->

							<div class="dropdown-cart-total">
								<span>Total</span>

								<span class="cart-total-price">$134.00</span>
							</div><!-- End .dropdown-cart-total -->

							<div class="dropdown-cart-action">
								<a href="cart.html" class="btn">View Cart</a>
								<a href="checkout-shipping.html" class="btn">Checkout</a>
							</div><!-- End .dropdown-cart-total -->
						</div><!-- End .dropdownmenu-wrapper -->
					</div><!-- End .dropdown-menu -->
				</div><!-- End .dropdown -->
			</div><!-- End .header-right -->
		</div><!-- End .container -->
	</div><!-- End .header-middle -->
</header><!-- End .header -->
