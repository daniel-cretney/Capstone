<?php
	include 'pdosetup.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Dan's</title>
	<link rel='icon' href='img/favicon.png' type='image/x-icon'>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='jerseys.css'>
	<link rel='stylesheet' type='text/css' href='page_format.css'>
	<script src="https://kit.fontawesome.com/f46d11bbae.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
<div class='container-fluid'>
	<a class='navbar-brand' href='index.php'><img class='brand'src='img/dealerdans.png'>  Dealer Dan's</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive'>
		<span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarResponsive'>
		<ul class='navbar-nav ml-auto'>
			<li class='nav-item'>
				<a class='nav-link' href='index.php'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link active' href='jersey.php'>Jerseys</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='login.php'>Sign In</a>
			<li class='nav-item'>
				<a class='nav-link' href='cart.php'>Cart</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<div class='container'>


	<label>Selections:</label>
		<select id='selections' onchange='location = this.value'>
		<option>Sizes</option>
			<option value='jersey.php'>All</option>
			<option value='jersey.small.php'>Small</option>
			<option value='jersey.medium.php'>Medium</option>
			<option value='jersey.large.php'>Large</option>
		</select> |
		<select id='selections' onchange='location = this.value'>
		<option>Teams</option>
		<option value='jersey.php'>All</option>
			<option value='bucks.php'>Bucks</option>
			<option value='celtics.php'>Celtics</option>
			<option value='clippers.php'>Clippers</option>
            <option value='lakers.php'>Lakers</option>
            <option value='mavericks.php'>Mavericks</option>
            <option value='nets.php'>Nets</option>
            <option value='nuggets.php'>Nuggets</option>
            <option value='pelicons.php'>Pelicons</option>
            <option value='rockets.php'>Rockets</option>
            <option value='trailblazers.php'>Trailblazers</option>
            <option value='warriors.php'>Warriors</option>
            <option value='76ers.php'>76ers</option>
		</select> |
        <select id='selections' onchange='location = this.value'>
		<option>New Arrivals</option>
			<option value='newarrivals.php'>All</option>
		</select> 
		<br><br>

	<form action='cart.php' method='POST'>
		<?php
			$stmt = $pdo->query('SELECT * FROM Inventory WHERE NewArrival = 1');
			$count = 0;
			while ($row = $stmt->fetch()){
				if ($count == 0){
					?>
					<div class='row'>
					<div class='col-md-4'>
						<img src="<?php echo $row['url'];?>" class="d-block w-100" name='Name' alt="Name">
						<h3><?php echo $row['Name']; ?></h3>
						<h5>Size: <?php echo $row['Size']; ?></h5>
						<h5>Price: $<?php echo $row['Price']; ?></h5>
						<button type='submit' name='add to cart' class='btn-btn-default cart'>Add to Cart</button>
					</div>
					<?php
					$count ++;}
					elseif ($count % 3 == 0){
					?>
					</div>
					<div class='row'>
					<div class='col-md-4'>
						<img src="<?php echo $row['url'];?>" class="d-block w-100" name='Name' alt="Name">
						<h3><?php echo $row['Name']; ?></h3>
						<h5>Size: <?php echo $row['Size']; ?></h5>
						<h5>Price: $<?php echo $row['Price']; ?></h5>
						<button type='submit' name='add to cart' class='btn-btn-default cart'>Add to Cart</button>
					</div>
					<?php
					$count ++;}
					else{
					?>
					<div class='col-md-4'>
						<img src="<?php echo $row['url'];?>" class="d-block w-100" name='Name' alt="Name">
						<h3><?php echo $row['Name']; ?></h3>
						<h5>Size: <?php echo $row['Size']; ?></h5>
						<h5>Price: $<?php echo $row['Price']; ?></h5>
						<button type='submit' name='add to cart' class='btn-btn-default cart'>Add to Cart</button>
					</div>
					<?php
					$count ++;}
					}
					?>
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