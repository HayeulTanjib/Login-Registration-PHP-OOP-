<?php require 'header.php'; ?>

<?php 

session_start();

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
		
		

         if (!empty($email) && !empty($password)) {
         	
$login = new Controller;
         $user =  $login->userlogin($email);




if (!$user) {

         	header('location:login.php?notfound');
         	}
         	else{

         		if (password_verify($password, $user->password)) {

                  $_SESSION['user_id'] = $user->id;
         			
         			header('location:index.php');
         		}
         		else{
         			header('location:login.php?wrgpass');
         		}


         		
         	}

         }
         else{
         	header('location:login.php?emptyfield');
         }


	
}



