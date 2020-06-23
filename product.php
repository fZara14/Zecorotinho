<!DOCTYPE html>
<html lang="en">

<head>
	<title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php
	include_once(__DIR__ . '/includes/header.php');
	?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate mb-5 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Produtos <i class="fa fa-chevron-right"></i></span></p>
					<h2 class="mb-0 bread">Produtos</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row mb-4">
						<div class="col-md-12 d-flex justify-content-between align-items-center">
							<h4 class="product-select">Selecione o tipo</h4>
							<select class="selectpicker" multiple>
								<option>Brandy</option>
								<option>Gin</option>
								<option>Rum</option>
								<option>Tequila</option>
								<option>Vodka</option>
								<option>Whiskey</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-1.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											<!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a> -->
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="sale">Oferta</span>
									<span class="category">Brandy</span>
									<h2>Bacardi 151</h2>
									<p class="mb-0"><span class="price price-sale">$69.00</span> <span class="price">$49.00</span></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-2.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="seller">Mais vendido</span>
									<span class="category">Gin</span>
									<h2>Jim Beam Kentucky Straight</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-3.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="new">Novidade</span>
									<span class="category">Rum</span>
									<h2>Citadelle</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-4.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Rum</span>
									<h2>The Glenlivet</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-5.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>Black Label</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-6.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Tequila</span>
									<h2>Macallan</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-7.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Vodka</span>
									<h2>Old Monk</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-8.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>Jameson Irish Whiskey</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-9.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>Screwball</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-10.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>Screwball</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-11.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>McClelland's</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-12.jpg);">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="cart.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="product-single.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="category">Whiskey</span>
									<h2>Plantation</h2>
									<span class="price">$69.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row mt-5">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>

				<div class="col-md-3">
					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Product Types</h3>
							<ul class="p-0">
								<li><a href="#">Brandy <span class="fa fa-chevron-right"></span></a></li>
								<li><a href="#">Gin <span class="fa fa-chevron-right"></span></a></li>
								<li><a href="#">Rum <span class="fa fa-chevron-right"></span></a></li>
								<li><a href="#">Tequila <span class="fa fa-chevron-right"></span></a></li>
								<li><a href="#">Vodka <span class="fa fa-chevron-right"></span></a></li>
								<li><a href="#">Whiskey <span class="fa fa-chevron-right"></span></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<?php
	include_once(__DIR__ . '/includes/footer.php');
	?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>