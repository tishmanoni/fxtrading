<?php
include 'main.php';
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['bank_name'], $_POST['account_no'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['bank_name']) || empty($_POST['account_no'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
$stmt = $con->prepare('INSERT INTO withdraw_form (bank_name, account_no	 ) VALUES (?, ?)');
$stmt->bind_param('ss', $_POST['bank_name'], $_POST['account_no']);
$stmt->execute();
$stmt->close();
header("refresh:5;url=admin/index.php");
echo 'You have submitted form';
exit;
