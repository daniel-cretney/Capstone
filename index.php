<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Dan's</title>
	<link rel="shortcut icon" type="image/jpg" href="img/favicon.jpg"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='page_format.css'>
</head>
<body>

<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
<div class='container-fluid'>
	<a class='navbar-brand' href='index.php'><img class='brand'src='img/dealerdans.png'>   Dealer Dan's</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse'
	data-target='#navbarResponsive'>
		<span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarResponsive'>
		<ul class='navbar-nav ml-auto'>
			<li class='nav-item active'>
				<a class='nav-link' href='index.php'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='jersey.php'>Jerseys</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='login.php'>Sign In</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='cart.php'>Cart</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<div id='slides' class='carousel slide' data-ride='carousel'>
<ul class='carousel-indicators'>
	<li data-target='#slides' data-slide-to='0' class='active'></li>
	<li data-target='#slides' data-slide-to='1'></li>
	<li data-target='#slides' data-slide-to='2'></li>
</ul>
<div class='carousel-inner'>
	<div class='carousel-item active'>
		<img src='img/nbajerseys.jpg'>
		<div class='carousel-caption'>
			<h1 class='display-2'>Shop Inventory</h1>
			<h3>What are you waiting for? These jerseys are hot n' ready to go!</h3>
			<a href='jersey.php'><button type='button' class='btn btn-primary btrn-lg'>
			Browse Shelves</button></a>
		</div>
	</div>
	<div class='carousel-item'>
		<img src='img/lebron_james.jpg'>
		<div class='carousel-caption'>
			<h1 class='display-2'>Sign Up for an Account Today!</h1>
			<h3>Sign up and become a step closer to your favorite player's jersey</h3>
			<a href='registration.php'><button type='button' class='btn btn-primary btrn-lg'>
			Sign Up</button></a>
			<a href='login.php'><button type='button' class='btn btn-primary btrn-lg'>
			Sign In</button></a>
		</div>
	</div>
	<div class='carousel-item'>
		<img src='img/otherjerseys.jpg'>
		<div class='carousel-caption'>
			<h1 class='display-2'>Check our Newest Arrivals!</h1>
			<h3>Wear them before you see someone else wearing them.</h3>
			<a href='newarrivals.php'><button type='button' class='btn btn-primary btrn-lg'>
			Check 'em out!</button></a>
		</div>
	</div>
</div>
</div>

<div class='container-fluid'>
<div class='row jumbotron'>
	<div class='col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10'>
		<p class='lead'>Navigate around our website and find the
		jerseys you like for cheap prices!</p>
	</div>
	<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2'>
		<a href='jersey.php'><button type='button' class='btn btn-outline-secondary btn-lg'>
		Check Us Out!</button></a>
	</div>
</div>
</div>

<div class='container-fluid padding'>
<div class='row welcome text-center'>
	<div class='col-12'>
		<h1 class='display-4'>Shop for Cheap.</h1>
	</div>
	<hr>
	<div class='col-12'>
		<p class='lead'>We have a variety of NBA jerseys for fans
		who are looking for authentic and affordable jerseys.</p>
	</div>
</div>
</div>
<footer>
<div class='container-fluid padding'>
<div class='row text-center'>
	<div class='col-12'>
		<img class='brand' src='img/dealerdans.png'>
		<hr class='light'>
		<p><a href='tel:6075928698'>(607) 592-8698</a></p>
		<p>daniel.cretney.16@cnu.edu</p>
		<p>1000 University Place</p>
		<p>Newport News, VA 23606</p>
	</div>
	<div class='col-12'>
		<hr class='light'>
		<h5>&copy; dealerdans.com</h5>
	</div>
</div>
</div>
</footer>



</body>
</html>
