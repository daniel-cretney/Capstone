<?php

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dealer Dan's Login</title>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<script src="https://kit.fontawesome.com/f46d11bbae.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' type='text/css' href='login.css'>
</head>
<body>
<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
<div class='container-fluid'>
	<a class='navbar-brand' href='index.html'><img src='img/dealerdans.png'>   Dealer Dan's</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse'
	data-target='#navbarResponsive'>
		<span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarResponsive'>
		<ul class='navbar-nav ml-auto'>
			<li class='nav-item active'>
				<a class='nav-link' href='index.html'>Home</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='#'>About</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='#'>Jerseys</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='User Login/login.html'>Sign In</a>
			</li>
			<li class='nav-item'>
				<a class='nav-link' href='#'>Sign Up</a>
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
				<form>
					<div class='input-group mb-3'>
						<div class='input-group-append'>
							<span class='input-group-text'><i class='fas fa-user'></i></span>
						</div>
						<input type='text' name='username' id='username' class='form-control input_user' required>
					</div>
					<div class='input-group mb-2'>
						<div class='input-group-append'>
							<span class='input-group-text'><i class='fas fa-key'></i></span>
						</div>
						<input type='password' name='password' id='password' class='form-control input_pass' required>
					</div>
					<div class='form-group'>
						<div class='custom-control custom-checkbox'>
							<input type='checkbox' name='remember me' class='custom-control-input' id='customControlInline'>
							<label class='custom-control-label' for='customControlInline'>Remember Me</label>
						</div>
					</div>
			</div>
			<div class='d-flex justify-content-center mt-3 login_container'>
				<button type='button' name='button' id='login' class='btn login_btn'>Login</button>
			</div>
				</form>
			<div class='mt-4'>
				<div class='d-flex justify-content-center links'>
				Don't have an account?<a href='#' class='ml-2'>Sign Up</a>
				</div>
			</div>
			<div class='d-flex justify-content-center'>
				<a href='#' class='ml-2'>Forgot your password?</a>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
	$(function(){
		$('#login').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
				var username = $('#username').val();
				var username = $('#password').val();
			}
		
			e.preventDefault();
		
			$.ajax({
				type: "POST",
				url: 'jslogin.php',
				data: {'username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) == '1'){
						setTimeout(' window.location.href = "index.php"', 2000);
					}
				},
				error: function(data){
					alert('there were errors while performing the operation');
				}
			});
		});
	});
</script>
</body>
</html>