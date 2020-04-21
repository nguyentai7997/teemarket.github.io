<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 02:56:45 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>teemarket</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="teemarket">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/images/icons/icon.ico">

	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = '<?= base_url()?>assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.min.css">

	<!-- Custom CSS File -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">

</head>
<body>
<div class="page-wrapper">
	<?php include("home-header_view.php") ?>

	<main class="main">
		<div class="container">
			<div class="home-slider-container">
				<div class="home-slider owl-carousel">
					<div class="home-slide">
						<div class="slide-bg owl-lazy"  data-src="<?= base_url()?>assets/images/slider/slide1.jpg"></div><!-- End .slide-bg -->
						<div class="home-slide-content slide-content-right">
							<h3>New Summer</h3>
							<h1>Collection</h1>
							<a href="category.html" class="btn btn-secondary">Shop Now</a>
						</div><!-- End .home-slide-content -->
					</div><!-- End .home-slide -->

					<div class="home-slide">
						<div class="slide-bg owl-lazy"  data-src="<?= base_url()?>assets/images/slider/slide2.jpg"></div><!-- End .slide-bg -->
						<div class="home-slide-content">
							<h3>New Collections</h3>
							<h1>For Him & Her</h1>
							<a href="category.html" class="btn btn-secondary">Shop Now</a>
						</div><!-- End .home-slide-content -->
					</div><!-- End .home-slide -->
				</div><!-- End .home-slider -->
			</div><!-- End .home-slider-container -->
		</div><!-- End .container -->

		<div class="home-top-section">
			<div class="container">
				<h2 class="title mb-3">Featured Products</h2>
				<div class="owl-carousel owl-theme featured-products">
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-1.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-2.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-3.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-4.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-5.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="product.html">
								<img src="<?= base_url()?>assets/images/products/product-6.jpg">
							</a>
							<div class="label-group">
								<div class="product-label label-cut">-20%</div>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
							</div>
							<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="category.html" class="product-category">category</a>
								</div>
								<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
							</div>
							<h2 class="product-title">
								<a href="product.html">Women Fashion-Black</a>
							</h2>
							<div class="ratings-container">
								<div class="product-ratings">
									<span class="ratings" style="width:100%"></span><!-- End .ratings -->
									<span class="tooltiptext tooltip-top"></span>
								</div><!-- End .product-ratings -->
							</div><!-- End .product-container -->
							<div class="price-box">
								<span class="old-price">$90</span>
								<span class="product-price">$70</span>
							</div><!-- End .price-box -->
						</div><!-- End .product-details -->
					</div>
				</div><!-- End .featured-products -->
			</div><!-- End .container -->

			<div class="mb-3 mb-lg-5"></div><!-- margin -->

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="cat-box">
							<figure>
								<a href="#">
									<img src="<?= base_url()?>assets/images/banners/banner-1.jpg" alt="banner">
								</a>
							</figure>

							<div class="cat-box-content">
								<h3 class="cat-box-title"><a href="#">Sunglasses</a></h3>
								<p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
							</div><!-- End .cat-box-content -->
						</div><!-- End .cat-box -->
					</div><!-- End .col-md-4 -->

					<div class="col-md-4">
						<div class="cat-box">
							<figure>
								<a href="#">
									<img src="<?= base_url()?>assets/images/banners/banner-2.jpg" alt="banner">
								</a>
							</figure>

							<div class="cat-box-content">
								<h3 class="cat-box-title"><a href="#">Shoes</a></h3>
								<p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
							</div><!-- End .cat-box-content -->
						</div><!-- End .cat-box -->
					</div><!-- End .col-lg-4 -->

					<div class="col-md-4">
						<div class="cat-box">
							<figure>
								<a href="#">
									<img src="<?= base_url()?>assets/images/banners/banner-3.jpg" alt="banner">
								</a>
							</figure>

							<div class="cat-box-content">
								<h3 class="cat-box-title"><a href="#">Watches</a></h3>
								<p>Lorem Ipsum is simply dummy<br> text of the printing and typesetting industry.<br> Lorem Ipsum has</p>
							</div><!-- End .cat-box-content -->
						</div><!-- End .cat-box -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .home-top-section -->

		<div class="promo-section" style="background-image: url(<?= base_url()?>assets/images/plan-sell.jpg)">
			<div class="container">
				<div class="container">
					<div class="promo-content">
						<div class="promo-content-wrapper">
							<h3 class="promo-title"><span>Planning to sell your designs on teemarket?</span></h3>
							<a href="#" class="btn btn-secondary">Join now</a>
						</div><!-- End .promo-content-wrapper -->
					</div><!-- End .promo-content -->
				</div><!-- End .container -->
			</div><!-- End .container -->
		</div><!-- End .promo-section -->

		<div class="home-bottom-section">
			<div class="container">
				<h2 class="title mb-3">New Arrivals</h2>

				<div class="products-group">
					<div class="row">
						<div class="col-lg-5">
							<div class="product">
								<figure class="product-image-container">
									<a href="product.html" class="product-image">
										<img src="<?= base_url()?>assets/images/products/home/product-1.jpg" alt="product">
									</a>
								</figure>
							</div><!-- End .product -->
						</div><!-- End .col-lg-5 -->

						<div class="col-lg-7">
							<div class="row">
								<div class="col-lg-4">
									<div class="row">
										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-2.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->

										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-3.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->
									</div><!-- End .row -->
								</div><!-- End .col-lg-4 -->

								<div class="col-lg-4">
									<div class="row">
										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-4.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->

										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-5.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->
									</div><!-- End .row -->
								</div><!-- End .col-lg-4 -->

								<div class="col-lg-4">
									<div class="row">
										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-6.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->

										<div class="col-6 col-lg-12">
											<div class="product">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="<?= base_url()?>assets/images/products/home/product-7.jpg" alt="product">
													</a>

												</figure>
											</div><!-- End .product -->
										</div><!-- End .col-6 -->
									</div><!-- End .row -->
								</div><!-- End .col-lg-4 -->
							</div><!-- End .row -->
						</div><!-- End .col-lg-7 -->
					</div><!-- End .row -->
				</div><!-- End .products-grop -->
			</div><!-- End .container -->
		</div><!-- End .home-bottom-section -->

		<div class="container">
			<div class="instagram-feed">
				<ul class="instagram-feed-list">
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/1.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/2.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/3.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/4.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/5.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/6.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/7.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/8.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/9.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/10.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/11.jpg" alt="Feed"></a></li>
					<li><a href="#"><img src="<?= base_url()?>assets/images/instagram/12.jpg" alt="Feed"></a></li>
				</ul>
				<div class="instagram-feed-content">
					<i class="icon-instagram"></i>
					<h3>Instagram</h3>
					<div>@teemarket</div>
					<a href="#" class="btn btn-secondary">Follow</a>
				</div><!-- End .instagram-feed-content -->
			</div><!-- End .instagram-feed -->
		</div><!-- End .container -->
	</main><!-- End .main -->

	<?php include("home-footer_view.php") ?>
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
	<div class="mobile-menu-wrapper">
		<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
		<nav class="mobile-nav">
			<ul class="mobile-menu">
				<li class="active"><a href="index-2.html">Home</a></li>
				<li>
					<a href="category.html">Categories</a>
					<ul>
						<li><a href="category-banner-full-width.html">Full Width Banner</a></li>
						<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
						<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
						<li><a href="category-sidebar-left.html">Left Sidebar</a></li>
						<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
						<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
						<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
						<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
						<li><a href="#">Product List Item Types</a></li>
						<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
						<li><a href="category-3col.html">3 Columns Products</a></li>
						<li><a href="category-4col.html">4 Columns Products</a></li>
						<li><a href="category-5col.html">5 Columns Products</a></li>
						<li><a href="category-6col.html">6 Columns Products</a></li>
						<li><a href="category-7col.html">7 Columns Products</a></li>
						<li><a href="category-8col.html">8 Columns Products</a></li>
					</ul>
				</li>
				<li>
					<a href="product.html">Products</a>
					<ul>
						<li>
							<a href="#">Variations</a>
							<ul>
								<li><a href="product.html">Horizontal Thumbnails</a></li>
								<li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
								<li><a href="product.html">Inner Zoom</a></li>
								<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
								<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Variations</a>
							<ul>
								<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
								<li><a href="product-simple.html">Simple Product</a></li>
								<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Product Layout Types</a>
							<ul>
								<li><a href="product.html">Default Layout</a></li>
								<li><a href="product-extended-layout.html">Extended Layout</a></li>
								<li><a href="product-full-width.html">Full Width Layout</a></li>
								<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
								<li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
								<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
					<ul>
						<li><a href="cart.html">Shopping Cart</a></li>
						<li>
							<a href="#">Checkout</a>
							<ul>
								<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
								<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
								<li><a href="checkout-review.html">Checkout Review</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li><a href="#" class="login-link">Login</a></li>
						<li><a href="forgot-password.html">Forgot Password</a></li>
					</ul>
				</li>
				<li><a href="blog.html">Blog</a>
					<ul>
						<li><a href="single.html">Blog Post</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
				<li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
			</ul>
		</nav><!-- End .mobile-nav -->

		<div class="social-icons">
			<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
			<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
			<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
		</div><!-- End .social-icons -->
	</div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body add-cart-box text-center">
				<p>You've just added this product to the<br>cart:</p>
				<h4 id="productTitle"></h4>
				<img src="#" id="productImage" width="100" height="100" alt="adding cart image">
				<div class="btn-actions">
					<a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
					<a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
				</div>
			</div>
		</div>
	</div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="<?= base_url()?>assets/js/main.min.js"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 02:57:16 GMT -->
</html>
