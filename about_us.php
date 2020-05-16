<?php
include "includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>about</title><link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link href="css1/font-awesome.min.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css1/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="//fonts.googleapis.com/css?family=Playball" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top id"> 
		<div class='container-fluid'>	
			<div class="container">
				<div class="navbar-header"> 
					<a class="navbar-brand" href="index.php" style="color: black;text-shadow: 2px 2px white;">Lifestyle Store</a>
					<div style="float:right;" class="nav navbar-nav navbar-right  ">
						<ul class="navbar-collapse myNavbar   " >
							<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
							<li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li> 
							<li><a href = "logout.php"><span class = "glyphicon glyphicon-tags"></span> Logout</a></li> 
							<li><a href = "about_us.php"><span class = "glyphicon glyphicon-list"></span> About US</a></li>  
						</ul>
					</div>
				</div> 				
			</div>
		</div>
	</div>
	<!-- about -->
	<section class=" py-lg-4 py-md-3 py-sm-3 py-3" id="about">
		<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			<div class="row">
				<div class="col-lg-6 about-imgs-txt">
					<img src="img/about-img.jpg" alt="news image">
				</div>
				<div class="col-lg-6 about-two-grids ">
					<h3 class="title mb-lg-4 mb-3"> About</h3>
					<p>sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt
						ut labore consectetur adipiscing sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor
					sit amet consectetur adipiscing sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet </p>
					<p class="mt-lg-3 mt-2">sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt
						ut labore consectetur adipiscing sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor
					sit amet consectetur adipiscing sed do. </p>
				</div>
			</div>
		</div>
	</section>
	<?php
	include "includes/footer.php";?>
	<!--//about -->

</body>
</html>