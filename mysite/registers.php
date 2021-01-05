<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Register</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<?php include('templates/header.php'); ?>
		<div class="register">
			<h1>Register</h1>
			<div class="links">
				<a href="registration.php">Login</a>
				<a href="registers.php" class="actived">Register</a>
			</div>
			<form action="register.php" method="post" autocomplete="off">
				<label for="Firstname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="firstname" placeholder="Firstname" id="firstname" required>

				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="cpassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<div class="msg"></div>
				<input type="hidden" id="date_registered" name="registered_date" value="<?php echo date("Y/m/d"); ?>" >
				<input type="submit" value="Register">
			</form>
		</div>
		<script>
		var form = document.querySelector('.register form');
		form.onsubmit = function(event) {
			event.preventDefault();
			var form_data = new FormData(form);
			var xhr = new XMLHttpRequest();
			xhr.open('POST', form.action, true);
			xhr.onload = function () {
				document.querySelector('.msg').innerHTML = this.responseText;
			};
			xhr.send(form_data);
		};
		</script>
	</body>
</html>
