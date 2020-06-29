<!DOCTYPE html>
<html lang="en">

<head>
	<title>ZeCorotinho</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php
	include_once(__DIR__ . '/includes/header.php');
	?>

	<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-8 ftco-animate d-flex align-items-end">
					<div class="text w-100 text-center">
						<h1 class="mb-4">Boas <span>Bebidas</span> Para Bons <span>Momentos</span>.</h1>
						<p><a href="product.php" class="btn btn-primary py-2 px-4">Comprar</a> <a href="about.php" class="btn btn-white btn-outline-white py-2 px-4">Leia mais</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-intro">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4 d-flex">
					<div class="intro d-lg-flex w-100 ftco-animate">
						<div class="icon">
							<span class="flaticon-support"></span>
						</div>
						<div class="text">
							<h2>Suporte Online 24h</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="intro color-1 d-lg-flex w-100 ftco-animate">
						<div class="icon">
							<span class="flaticon-cashback"></span>
						</div>
						<div class="text">
							<h2>Garantia de dinheiro de volta</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="intro color-2 d-lg-flex w-100 ftco-animate">
						<div class="icon">
							<span class="flaticon-free-delivery"></span>
						</div>
						<div class="text">
							<h2>Frete grátis &amp; Devoluções</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb">
		<form action="./includes/controller.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
						<button type="submit" name="btnVinho" value="vinho" class="btn">
							<div class="img" style="background-image: url(images/kind-1.jpg);"></div>
							</button>
							<h3>Vinho</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
						<button type="submit" name="btnGin" value="gin" class="btn">
							<div class="img" style="background-image: url(images/kind-2.jpg);"></div>
							</button>
							<h3>Gin</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
						<button type="submit" name="btnRum" value="rum" class="btn">
							<div class="img" style="background-image: url(images/kind-3.jpg);"></div>
							</button>
							<h3>Rum</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
						<button type="submit" name="btnTequila" value="tequila" class="btn">
							<div class="img" style="background-image: url(images/kind-4.jpg);"></div>
							</button>
							<h3>Tequila</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
						<button type="submit" name="btnVodka" value="vodka" class="btn">
							<div class="img" style="background-image: url(images/kind-5.jpg);"></div>
							</button>
							<h3>Vodka</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<button type="submit" name="btnWhiskey" value="whiskey" class="btn">
								<div class="img" style="background-image: url(images/kind-6.jpg);"></div>
							</button>
							<h3>Whiskey</h3>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Nossas ofertas</span>
				</div>
			</div>
			<div class="row">

				<?php
				include_once(__DIR__ . '/includes/home-list-products.php');
				?>

			</div>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="product.php?categoria=todos" class="btn btn-primary d-block">Ver todos os produtos <span class="fa fa-long-arrow-right"></span></a>
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
	<script src="js/main.js"></script>

</body>

</html>