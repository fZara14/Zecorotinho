<!DOCTYPE html>
<html lang="en">

<head>
	<title>ZéCorotinho</title>
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
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Finalizar <i class="fa fa-chevron-right"></i></span></p>
					<h2 class="mb-0 bread">Cadastro</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 ftco-animate">
					<form action="./includes/controller.php" method="post" class="billing-form">
						<h3 class="mb-4 billing-heading">Informações do Usuario</h3>
						<div class="row align-items-end">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nome">Primeiro Nome</label>
									<input type="text" name="nome" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sobrenome">Sobrenome</label>
									<input type="text" name="sobrenome" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" placeholder="">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cpf">CPF</label>
									<input type="text" name="cpf" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="senha">Senha:</label>
									<input type="text" name="senha" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="senha">Confirmar Senha</label>
									<input type="text" name="senha" class="form-control" placeholder="">
								</div>
							</div>
							<br>
							<div class="w-100"></div>
							<br>

							<div class="text-center">
								<input style="margin-left: 420px;" name="register" type="submit" class="btn btn-primary py-3 px-4 mx-auto d-pad" value="Cadastrar">
								<input style="margin-left: 420px;" name="update" type="submit" class="btn btn-primary py-3 px-4 mx-auto d-pad" value="Atualizar">
								<input style="margin-left: 420px;" name="delete" type="submit" class="btn btn-primary py-3 px-4 mx-auto d-pad" value="Deletar">
							</div>
					</form><!-- END -->
					
				</div> <!-- .col-md-8 -->
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