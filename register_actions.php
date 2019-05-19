<?php require 'header.php'; ?>

<?php 

if (isset($_POST['register'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($name) && !empty($email) && !empty($password)) {

		$register = new Controller;

		$chk_mail = $register->chk_email($email);

		if ($chk_mail == false) {

			$password = password_hash($password, PASSWORD_BCRYPT);
			$register->registration($name,$email,$password);
			header('location:register.php?registered');

		}
		elseif ($chk_mail == true) {
			header('location:register.php?emailexist');
		}
	}
	else{
		header('location:register.php?notregistered');
	}
}

