<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Dan's Login</title>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<script src="https://kit.fontawesome.com/f46d11bbae.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' type='text/css' href='login.css'>
	
</head>
<body>
<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
<div class='container-fluid'>
	<a class='navbar-brand' href='index.php'><img class='brand' src='img/dealerdans.png'>   Dealer Dan's</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse'
	data-target='#navbarResponsive'>
		<span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarResponsive'>
		<ul class='navbar-nav ml-auto'>
			<li class='nav-item'>
				<a class='nav-link' href='index.php'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='jersey.php'>Jerseys</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link active' href='login.php'>Sign In</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='cart.php'>Cart</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<div class='container h-100'>
	<div class='d-flex justify-content-center h-100'>
		<div class='user_card'>
			<div class='d-flex justify-content-center'>
				<div class='brand_logo_container'>
					<img src='img/dealerdans.png' class='brand_logo' alt='Dealer Dans Logo'>
				</div>
			</div>
			<div class='d-flex justify-content-center form_container'>
				<form method='post' >
                <?php
                    include 'pdosetup.php';
                    session_start();
                    if(isset($_SESSION['username'])){
                        echo '<div class="center"><h3>Login Success, Hello ' . $_SESSION['username'] . '</h3>';
                        echo '<br><br><a href="logout.php" class="ml-2">Logout</a></div>';
                    }
                    else{
                        header('location:login.php');
                    }
                ?>
				</form>
			</div>
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
</footer>
</body>
</html>