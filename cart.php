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
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Carrinho <i class="fa fa-chevron-right"></i></span></p>
					<h2 class="mb-0 bread">Meu Carrinho</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="table-wrap">
					<table class="table">
						<thead class="thead-primary">
							<tr>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Produto</th>
								<th>Preço</th>
								<th>Quantidade</th>
								<th>Total</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr class="alert" role="alert">
								<td>
									<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<div class="img" style="background-image: url(images/prod-1.jpg);"></div>
								</td>
								<td>
									<div class="email">
										<span>Jim Beam Kentucky Straight</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td>$44.99</td>
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
									</div>
								</td>
								<td>$89.98</td>
								<td>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</button>
								</td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<div class="img" style="background-image: url(images/prod-2.jpg);"></div>
								</td>
								<td>
									<div class="email">
										<span>Jim Beam Kentucky Straight</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td>$30.99</td>
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>
								<td>$30.99</td>
								<td>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</button>
								</td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<div class="img" style="background-image: url(images/prod-3.jpg);"></div>
								</td>
								<td>
									<div class="email">
										<span>Jim Beam Kentucky Straight</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td>$35.50</td>
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>
								<td>$35.50</td>
								<td>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</button>
								</td>
							</tr>

							<tr class="alert" role="alert">
								<td>
									<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<div class="img" style="background-image: url(images/prod-4.jpg);"></div>
								</td>
								<td>
									<div class="email">
										<span>Jim Beam Kentucky Straight</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td>$76.99</td>
								<td class="quantity">
									<div class="input-group">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>
								<td>$76.99</td>
								<td>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</button>
								</td>
							</tr>

							<tr class="alert" role="alert">
								<td class="border-bottom-0">
									<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</td>
								<td class="border-bottom-0">
									<div class="img" style="background-image: url(images/prod-5.jpg);"></div>
								</td>
								<td class="border-bottom-0">
									<div class="email">
										<span>Jim Beam Kentucky Straight</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td class="border-bottom-0">$40.00</td>
								<td class="quantity border-bottom-0">
									<div class="input-group">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>
								<td class="border-bottom-0">$40.00</td>
								<td class="border-bottom-0">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Total do carrinho</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span>$20.60</span>
						</p>
						<p class="d-flex">
							<span>Frete</span>
							<span>$0.00</span>
						</p>
						<p class="d-flex">
							<span>Desconto</span>
							<span>$3.00</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span>$17.60</span>
						</p>
					</div>
					<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Finalizar compra</a></p>
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