<?php
	session_start();
	include 'pdosetup.php';
try{
	if (isset($_POST['login'])){
		if(empty($_POST['username']) || empty($_POST['pass'])){
			$message = '<label>Both fields are required</label>';
		}
		else{
			$query = "SELECT * FROM User WHERE Username = :username AND Pass = :pass";
			$stmt = $pdo->prepare($query);
			$stmt->execute(array('username' => $_POST['username'], 'pass' => $_POST['pass']));
			$count = $stmt->rowCount();
			if ($count > 0){
				$_SESSION['username'] = $_POST['username'];
				header('location:login_success.php');
			}
			else{
				$message =  "<label>Username or Password is Incorrect</label>";
			}
		}
	}
}
catch(PDOException $error){
	$message = $error->getMessage();
}
?>
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
<?php
	if(isset($message)){
		echo '<div class="center"><h2><label class="text-danger">'.$message.'</label></h2></div>';
	}
?>
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
					<div class='input-group mb-3'>
						<div class='input-group-append'>
							<span class='input-group-text'><i class='fas fa-user'></i></span>
						</div>
						<input type='text' name='username' id='username' class='form-control input_user' placeholder='Enter Username' required>
					</div>
					<div class='input-group mb-2'>
						<div class='input-group-append'>
							<span class='input-group-text'><i class='fas fa-key'></i></span>
						</div>
						<input type='password' name='pass' id='password' class='form-control input_pass' placeholder='Enter Password' required>
					</div>
					<div class='form-group'>
						<div class='custom-control custom-checkbox'>
							<input type='checkbox' name='remember me' class='custom-control-input' id='customControlInline'>
							<label class='custom-control-label' for='customControlInline'>Remember Me</label>
						</div>
					</div>
				<div class='d-flex justify-content-center mt-3 login_container'>
					<button type='submit' name='login' id='login' class='btn login_btn'>Login</button>
				</div>
				</form>
			</div>
			<div class='mt-4'>
				<div class='d-flex justify-content-center links'>
				Don't have an account?<a href='registration.php' class='ml-2'>Sign Up</a>
				</div>
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