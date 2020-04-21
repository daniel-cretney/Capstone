<?php
include 'pdosetup.php';
?>
<?php
	if (isset($_POST['create'])){

		$Username = $_POST['username'];
		$Pass = $_POST['pass'];
		$Email = $_POST['email'];
		$FName = $_POST['firstname'];
		$LName = $_POST['lastname'];
		
		// if (!checkUsernameExists($pdo, $Username)){
		// 	echo 'Username already Exists';
		// 	return;
		// }

		$query = "INSERT INTO User (Username, Pass, Email, FName, LName	)
		VALUES (:Username, :Pass, :Email, :FName, :LName)";

		$stmt = $pdo->prepare($query);

		$pdoexec = $stmt->execute([":Username"=>$Username, ":Pass"=>$Pass, ":Email"=>$Email, ":FName"=>$FName, ":LName"=>$LName]);
		
		if ($pdoexec){
			echo 'Data Inserted';
		}
		else{
			echo 'Data Not Inserted';
		}
	}
	// function checkUsernameExists($pdo, $Username){
	// 	$query = "SELECT * FROM User WHERE Username=:Username";
	// 	$stmt = $pdo->prepare($query);
	// 	$stmt->execute([":Username"=>$Username]);

	// 	if ($query->rowCount() == 1){
	// 		return false;
	// 	}
	// 	else{
	// 		return true;
	// 	}
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Dan's Login</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='page_format.css'>
	<link rel='stylesheet' type='text/css' href='registration.css'>
	<script src="https://kit.fontawesome.com/f46d11bbae.js" crossorigin="anonymous"></script>
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
				<a class='nav-link' href='index.php'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='jerseys.php'>Jerseys</a>
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
<div class='container h-100'>
	<div class='d-flex justify-content-center h-100'>
		<div class='user_card'>
			<div class='d-flex justify-content-center'>
				<div class='brand_logo_container'>
					<img src='img/dealerdans.png' class='brand_logo' alt='Dealer Dans Logo'>
				</div>
			</div>
			<div class='d-flex justify-content-center form_container'>
				<form action='registration.php' method='post'>
					<h1 class='registration'>Registration</h1>
					<p class='registration'>Fill out the form with correct values.</p>

					<label for='firstname' class='titles'><b>First Name</b></label>
					<input class ='form-control' type='text' name='firstname' required>
					
					<label for='lastname' class='titles'><b>Last Name</b></label>
					<input class ='form-control' type='text' name='lastname' required>
			
					<label for='email' class='titles'><b>Email Address</b></label>
					<input class ='form-control' type='email' name='email' required>

					<label for='username' class='titles'><b>Username</b></label>
					<input class ='form-control' type='username' name='username' required>
					
					<label for='password' class='titles'><b>Password</b></label>
					<input class ='form-control' type='password' name='pass' required>
					<hr class='mb-3'>
					
					<div class='mt-4'>
						<div class='d-flex justify-content-center links'>
						Already have an account?<a href='login.php' class='ml-2'>Sign In</a>
						</div>
					</div>
					
					<div class='d-flex justify-content-center mt-3 login_container'>
					<input class='btn btn-primary' type='submit' name='create' value='Sign Up'>
					</div>
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
</div>
</div>
</footer>
</body>
</html>