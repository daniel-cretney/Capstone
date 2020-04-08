<?php
	include 'config.php';
	
	$sql = 'SELECT * FROM Inventory';
	$result = mysqli_query($conn, $sql) or die('Disconnected');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Dan's</title>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='jerseys.css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel='stylesheet' type='text/css' href='page_format.css'>
	<script src="https://kit.fontawesome.com/f46d11bbae.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
<div class='container-fluid'>
	<a class='navbar-brand' href='index.html'><img class='brand'src='img/dealerdans.png'>   Dealer Dan's</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse'
	data-target='#navbarResponsive'>
		<span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarResponsive'>
		<ul class='navbar-nav ml-auto'>
			<li class='nav-item'>
				<a class='nav-link' href='index.html'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link active' href='jerseys.html'>Jerseys</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='login.html'>Sign In</a>
			<li class='nav-item'>
				<a class='nav-link' href='cart.php'>Cart</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<?php 
	$sql = "SELECT * FROM inventory;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc()) {
			echo $row['url']; . "<br>"
			
		}
	}
?>
<div class='background_color'>
<div class='container'>
<form action='cart.php' method='POST'
	<div class='row'>
		<div class='col-md-4'>
				<img src="jerseys/steph_curry.jpg" class="d-block w-100" alt="Steph Curry">
				<h3>Steph Curry</h3>
				<h5>$40</h5>
				<h6>Quantity:</h4>
				<button type='submit' name='stephcurry' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/lebronjersey.jpg" class="d-block w-100" alt="Lebron James">
				<h3>LeBron James</h3>
				<h5>$40</h5>
				<button type='submit' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/luka_doncic.jpg" class="d-block w-100" alt="Luka Doncic">
				<h3>Luka Doncic</h3>
				<h5>$40</h5>
				<button type='submit' class='btn-btn-default cart'>Add to Cart</button>
		</div>
	</div>
	<div class='row'>	
		<div class='col-md-4'>
				<img src="jerseys/giannis.jxr" class="d-block w-100" alt="Giannis Antetokoumpo">
				<h3>Giannis Antetokoumpo</h3>
				<h5>$40</h5>
				<button type='submit' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/tatum.jxr" class="d-block w-100" alt="Jayson Tatum">
				<h3>Jayson Tatum</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/harden.jxr" class="d-block w-100" alt="James Harden">
				<h3>James Harden</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-4'>
				<img src="jerseys/kawhi.jpg" class="d-block w-100" alt="Kawhi Leonard">
				<h3>Kawhi Leonard</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/davis.jpg" class="d-block w-100" alt="Anthony Davis">
				<h3>Anthony Davis</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/embid.jxr" class="d-block w-100" alt="Joel Embid">
				<h3>Joel Embid</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-4'>
				<img src="jerseys/kyrie.jxr" class="d-block w-100" alt="Kyrie Irving">
				<h3>Kyrie Irving</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/simmons.jxr" class="d-block w-100" alt="Ben Simmons">
				<h3>Ben Simmons</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/durant.jxr" class="d-block w-100" alt="Kevin Durant">
				<h3>Kevin Durant</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-4'>
				<img src="jerseys/westbrook.jpg" class="d-block w-100" alt="Russell Westbrook">
				<h3>Russell Westbrook</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/kemba.jpg" class="d-block w-100" alt="Kemba Walker">
				<h3>Kemba Walker</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
		<div class='col-md-4'>
				<img src="jerseys/zion.jpg" class="d-block w-100" alt="Zion Williamson">
				<h3>Zion Williamson</h3>
				<h5>$40</h5>
				<button type='button' class='btn-btn-default cart'>Add to Cart</button>
		</div>
	</div>
</form>
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