<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">	
	<link href="css/style1.css" rel="stylesheet">
	<link href="css/My.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include "includes/head.php";?>
	<div class="container">
		<div id="identity">
			<img src="img/contact.png" alt="image not found" widht=250px height= 200px id="image">
			<b><h1>Live Support</h1></b>
			<h3>24 hours a day | 7 days a week | 365 day in a year| we happy help you</h3>

			<p>	Batman's secret identity is Bruce Wayne, a wealthy American industrialist who resides just outside of Gotham City. As a child, Bruce witnessed the murder of his parents, Thomas Wayne and Martha Wayne, whichcultimately led him to craft the Batman persona and seek vengeance against criminals. Wayne averts suspicion by acting the part of a superficial playboy idly living off his family's fortune, which was amassed through investment in real estate before the city became a bustling metropolis, and the profits of Wayne Enterprises, his inherited onglomerate.Bruce Wayne resides just outside of Gotham City in Wayne Manor. He upports philanthropic causes through his nonprofit Wayne Foundation, but is more widely known as a celebrity socialite. In public, he appears frequently in the company of high-status women, which encourages tabloid gossip. Although Bruce Wayne leads an active romantic life, crime-fighting accounts for most of his tim</p>
		</div>

		<div class="row">
			<div class="container">
				<div class="col-lg-6 col-lg-offset-4 col-md-4 ">
					<form action="#" method=POST>
						<h1>Contact US</h1>
						Nmae:<input type="text" class="form-control" name="name" placeholder="Name" required>
						Email:<input type="email"  class="form-control" name="email" placeholder="Email" required>
						Contact No:<input type="text"  class="form-control"  name="number" placeholder="Number" required>
						Massage:<textarea rows="4" cols="50" class="form-control" name="comment" form="usrform" placeholder="Enter your massage here"></textarea>
						<br>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						<br>
						<br></textarea>
					</form>
				</div>			
			</div>
		</div>
	</div>

	<?php
	include "includes/footer.php";?>
</body>
</html>