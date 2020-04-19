<?php
	include 'pdosetup.php'
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
	$rows = $pdo->query('SELECT count(*) FROM inventory')->fetchColumn();
	$stmt = $pdo->query('SELECT * FROM inentory');
	if ($rows > 0){
		$cols = 3;
		$counter = 1;
		$nbsp = $cols - ($rows % $cols);

		echo '<div class="container">';
		while ($row = $stmt->fetch()){
			if (($counter % $cols) == 1){
				echo '<div class="row">';
			}
			$IMG = $row['url'];
			$Name = $row['Name'];
			$Size = $row['Size'];
			$Price = $row['Price'];
			echo '<div class="col-md-4">
				<h3><img src='$IMG;'></h3>
				<h3>'$Name;'</h3>
				<h5>Size: '$Size;'</h5>
				<h5>Price: '$Price;'</h5>
				<button type="Submit" name="add to cart" class="btn-btn-defualt cart">Add to Cart</button>
				</div>'
			
			if (($counter % $cols) == 0){
				echo '</div>';
			}
			$counter++;
		}
		$stmt->free();
		if ($nbsp > 0){
			for ($i = 0; $i < $nbsp; $i++){
				echo '<div class="col-md-4">&nbsp;</div>';
			}
			echo '</div>';
		}
		echo '</div>'
	}
	
	?>
</form>
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