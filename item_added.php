<?php
include "includes/common.php";
include "includes/head.php";

echo "<center><h1> item is already added, please go to cart</h1></center>";
?>
<div id="content">
	<div class="container-fluid decor_bg" id="login-panel">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info" >
					<div class="panel-body">
						
							<form action="cart.php" method="POST">
								<center><button type="submit" name="submit"   class="btn btn-primary"class = "glyphicon glyphicon-shopping-cart">Your Cart</button></center>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
?>