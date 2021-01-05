<?php
include 'main.php';
// Output message
$msg = '';
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (isset($_POST['email'])) {
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    $stmt = $con->prepare('SELECT * FROM accounts WHERE email = ?');
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $account = $result->fetch_array(MYSQLI_ASSOC);
    $stmt->close();
    // If the account exists with the email
    if ($account) {
        // Account exist, the $msg variable will be used to show the output message (on the HTML form)
        // Update the reset code in the database
    	$uniqid = uniqid();
        $stmt = $con->prepare('UPDATE accounts SET reset = ? WHERE email = ?');
        $stmt->bind_param('ss', $uniqid, $_POST['email']);
        $stmt->execute();
        $stmt->close();
        // Email to send below, customize this
        $from = 'Your Company Name <noreply@yourdomain.com>'; // Change "Your Company Name" and "yourdomain.com", do not remove the < and >
    	$subject = 'Password Reset';
    	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        // Change the link below from "yourdomain.com" to your own domain name where the PHP login system is hosted
        $reset_link = 'http://yourdomain.com/phplogin/resetpassword.php?email=' . $_POST['email'] . '&code=' . $uniqid;
    	// Feel free to customize the email message below
    	$message = '<p>Please click the following link to reset your password: <a href="' . $reset_link . '">' . $reset_link . '</a></p>';
        // Send email to the user
    	mail($_POST['email'], $subject, $message, $headers);
        $msg = 'Reset password link has been sent to your email!';
    } else {
        $msg = 'We do not have an account with that email!';
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Forgot Password</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
			<h1>Forgot Password</h1>
			<form action="forgotpassword.php" method="post">
                <label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Your Email" id="email" required>
				<div class="msg"><?=$msg?></div>
				<input type="submit" value="Submit">
			</form>
		</div>

      <?php include('templates/footer.php'); ?>
	</body>
</html>
