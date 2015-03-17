<?php

session_start();

$conn = new mysqli('192.168.2.5', 'md', 'plaintext', 'bounce');

if ($conn->connect_errno) {
	echo "you're fucked buddy";
}

if (isset($_POST['login'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	echo "paskdjlkajsdf\n";

	$cost = 10;

	echo "aslkdjflkajsdlkf\n";

	echo "parrot = ";
	if (function_exists('mcrypt_create_iv')) {
		echo "mcrypt_create_iv exists.";
	} else {
		echo "mcrypt_create_iv does not exist.";
	}
	echo "\n";

	$iv = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);

	echo "pooooooop\n";

	echo "laksdjlfkjaslkdf\n";
	$salt = sprintf("$2a$%02d$", $cost) . $salt;

	$hash = crypt($pass, $salt);

	echo "hash = " . $hash . "\n";


	/*
	$sel_user = 'SELECT *
		     FROM admin
		     WHERE a_name="' . $name . '" AND a_pass="' . $pass . '";';

	$run_user = mysqli_query($conn, $sel_user);
	$check_user = mysqli_num_rows($run_user);

	if ($check_user > 0) {
		$_SESSION['name']=$name;
		$_SESSION['logged_in']=1;
		echo "<script>window.open('main.php','_self')</script>";
	}
	else {
		header('location:index.php');
		exit;
	}
	*/

	echo "pooooooooop";
}

?>
