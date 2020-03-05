<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	 <?php include("header.php"); ?>
</head>
<body>
	<?php include("topnav.php"); ?>

	<div class="limiter">
	
		<div class="container-login100">
		
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="client/check_login.php">
					
				
					<span class="login100-form-title p-t-20 p-b-45">
						Welcome to Client Login Panel
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<footer>
	
    <?php include("footer.php"); ?>
</footer>
</body>
</html>