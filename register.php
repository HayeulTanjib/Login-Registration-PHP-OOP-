<?php require 'header.php'; ?>


<?php 

session_start();

if (isset($_SESSION['user_id'])) {
	
	header('location:index.php');
}

 ?>



<?php 

$succ_msg = '';
$wrg_msg = '';

if (isset($_GET['registered'])) {
	
	$succ_msg = 'Registration done successfully';
}
elseif (isset($_GET['notregistered'])) {
	
	$wrg_msg = 'Something Wrong!';
}
elseif (isset($_GET['emailexist'])) {
	
	$wrg_msg = 'email is already exist!';
}



 ?>


<div class="card mt-5">
	<div class="card-header">
		<h2>Registration</h2>
	</div>

	<div class="card-body">

     <?php if (!empty($succ_msg)):?>
     	<div class="alert alert-success"><?php echo $succ_msg; ?></div>
     <?php endif; ?>

 <?php if (!empty($wrg_msg)):?>
     	<div class="alert alert-danger"><?php echo $wrg_msg; ?></div>
     <?php endif; ?>

		
		<form action="register_actions.php" method="POST">


			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name Here">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Your Email Here">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password Here">
			</div>

			<div class="form-group">
				<button type="submit" name="register" class="btn btn-outline-primary">Register</button>
			</div>

			<div class="form-group">

				<p>Already registered? <a style="text-decoration: none" href="login.php">Login here</a></p>
			</div>

		</form>

	</div>
</div>


<?php require 'footer.php'; ?>



