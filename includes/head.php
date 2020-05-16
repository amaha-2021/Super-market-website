<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/My.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="navbar navbar-inverse navbar-fixed-top id"> 
	<div class='container-fluid id'>	
		<div class="container ">
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button> 
				<a class="navbar-brand" href="index1.php">Lifestyle Store</a>
			</div> 
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right"> 
					<?php 
					if (isset($_SESSION['email_id'])) { ?>
						<li><a href = "products.php"><span class = "glyphicon glyphicon-list"></span> Products</a></li>  
						<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
						<li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li> 
						<li><a href = "logout.php"><span class = "glyphicon glyphicon-tags"></span> Logout</a></li> 
						<li><a href = "about_us.php"><span class = "glyphicon glyphicon-list"></span> About US</a></li>

						<?php
					} 
					else { ?> 
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
						<li><a href="about_us.php"><span class="glyphicon glyphicon-list"></span> About US</a></li> 
						<li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact US</a></li> 
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login Here</a></li> 
						<?php 
					} 
					?> 
				</ul>
			</div> 
		</div>
	</div>
</div>