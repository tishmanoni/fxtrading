<?php
include 'main.php';
// If the user is logged-in redirect them to the home page
if (isset($_SESSION['loggedin'])) {
    header('Location: home.php');
    exit;
}
// Also check if the user is remembered, if so redirect them to the home page
if (isset($_COOKIE['rememberme']) && !empty($_COOKIE['rememberme'])) {
	// If the remember me cookie matches one in the database then we can update the session variables.
	$stmt = $con->prepare('SELECT id, username, role FROM accounts WHERE rememberme = ?');
	$stmt->bind_param('s', $_COOKIE['rememberme']);
	$stmt->execute();
	$stmt->store_result();
  if ($stmt->num_rows > 0) {
  		// Found a match
  		$stmt->bind_result($id, $username, $role);
  		$stmt->fetch();
  		$stmt->close();
  		session_regenerate_id();
  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $username;
  		$_SESSION['id'] = $id;
  		$_SESSION['role'] = $role;
  		header('Location: home.php');
  		exit;
  	}
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- footer css -->
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f41b3441e7ade5df4431f67/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

	</head>
	<body>

    <nav class="navbar navbar-expand-md my-nav">
    <a href="#" class="navbar-brand"  >
        DOWJONES
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"><i class="fa fa-bars bg-primary" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-5 pb-3 pt-3">
            <a href="index.php" class="nav-item nav-link active">HOME</a>&nbsp;&nbsp;&nbsp;
            <a href="about.php" class="nav-item nav-link">ABOUT US</a>&nbsp;&nbsp;&nbsp;
            <a href="contact.php" class="nav-item nav-link">CONTACT US</a>&nbsp;&nbsp;&nbsp;
            <a href="service.php" class="nav-item nav-link">SERVICES</a>&nbsp;&nbsp;&nbsp;
             <?php if(isset($_SESSION['loggedin'])): ?>
            <a href="/mysite/admin" class="nav-item nav-link">DASHBOARD</a>&nbsp;&nbsp;&nbsp;
            <a href="/mysite/logout.php" class="nav-item nav-link">LOGOUT</a>&nbsp;&nbsp;&nbsp;
            <?php else: ?>
            <a href="registration.php" class="btn btn-warning">LOGIN/SIGNUP</a>
            <?php endif; ?>



        </div>

    </div>
</nav>


		<div class="login">
			<h1>Login</h1>
			<div class="links">
        <!-- i changed the active name -->
				<a href="registration.php" class="actived">Login</a>
				<a href="registers.php">Register</a>
			</div>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label id="rememberme">
					<input type="checkbox" name="rememberme">Remember me
				</label>
        <a href="forgotpassword.php">Forgot Password?</a>
				<div class="msg"></div>
				<input type="submit" value="Login">
			</form>
		</div>


      <?php include('templates/footer.php'); ?>


		<script>
        document.querySelector(".login form").onsubmit = function(event) {
			event.preventDefault();
			var form_data = new FormData(document.querySelector(".login form"));
			var xhr = new XMLHttpRequest();
			xhr.open("POST", document.querySelector(".login form").action, true);
			xhr.onload = function () {
				if (this.responseText.toLowerCase().indexOf("success") !== -1) {
					window.location.href = "home.php";
				} else {
					document.querySelector(".msg").innerHTML = this.responseText;
				}
			};
			xhr.send(form_data);
		};
		</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
