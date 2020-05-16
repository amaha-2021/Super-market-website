<?php
include "includes/common.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products | Life Style Store</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php
	include 'includes/head.php';
	?><hr>
	<div class="container" id="content">
		<!-- Jumbotron Header -->
		<div class="row text-center" id="cameras ">
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading ">
						product 1
					</div>
					<div class="thumbnail">
						<img src="img/soap.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>SOAP </h3>
							<p>Price: Rs. 20 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=1" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=soap_QR1" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						product 2
					</div>
					<div class="thumbnail">
						<img src="img/tooth_paste.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Tooth Paste</h3>
							<p>Price: Rs. 30 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=2" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=tooth_past_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						product 3
					</div>
					<div class="thumbnail">
						<img src="img/calculator.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Scientific Calcuator</h3>
							<p>Price: Rs. 1000 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=3" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=calculator_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="row text-center" id="cameras">
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						Product 4
					</div>
					<div class="thumbnail">
						<img src="img/cream_biscuit.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Cream Biscuit </h3>
							<p>Price: Rs.100 family pack</p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=4" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=cream_Biscuit_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						Product 5
					</div>
					<div class="thumbnail">
						<img src="img/normal_biscuit.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Normal Biscuit</h3>
							<p>Price: Rs. 80 Fmaily pack</p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=5" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=normal_biscuit_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						Product 6
					</div>
					<div class="thumbnail">
						<img src="img/face_wash_cream.jpg" alt="" style="width:250px;height:200px;">
						<div class="caption">
							<h3>Face wash Cream</h3>
							<p>Price: Rs. 1400 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=6" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=Face_wash_cream_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center" id="cameras">
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						product 7
					</div>
					<div class="thumbnail">
						<img src="img/carrom_board.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Carrom Board</h3>
							<p>Price: Rs.1200 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=7" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=carrom_board_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						pproduct 8
					</div>
					<div class="thumbnail">
						<img src="img/non_stice_tava.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Non Stick Tava</h3>
							<p>Price: Rs.400 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=8" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=non_stick_tava_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 home-feature">
				<div class="panel panel-info">
					<div class="panel-heading">
						product 9
					</div>
					<div class="thumbnail">
						<img src="img/mens_wallet.jpg" alt=""style="width:250px;height:200px;">
						<div class="caption">
							<h3>Mens Wallet </h3>
							<p>Price: Rs. 150 </p>
							<form method="POST" action="cart_check.php">
								<a href="cart_check.php?id=9" role="button" class="btn btn-primary btn-block">Add to cart</a>
								<a href="image.php?id=mens_wallet_QR" role="button" class="btn btn-primary btn-block">View the QR code</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<?php include("includes/footer.php"); ?>
</body>

</html>