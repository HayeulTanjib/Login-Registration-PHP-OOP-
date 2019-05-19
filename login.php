<?php require 'header.php'; ?>


<?php 

session_start();

if (isset($_SESSION['user_id'])) {
	
	header('location:index.php');
}


 ?>

<?php 

$wrg_msg = '';

if (isset($_GET['notfound'])) {
	$wrg_msg = 'user not found!';
	
}elseif (isset($_GET['wrgpass'])) {
	$wrg_msg = 'wrong password!';

}elseif (isset($_GET['emptyfield'])) {
	$wrg_msg = 'field must not be empty!';
}

?>


<div class="card mt-5">
	<div class="card-header">
		<h2>Login</h2>
	</div>



	<div class="card-body">

		<?php if(!empty($wrg_msg)): ?>
			<div class="alert alert-danger"><?php echo $wrg_msg; ?></div>
		<?php endif; ?>

		
		<form action="login_actions.php" method="POST">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Your Email Here">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password Here">
			</div>

			<div class="form-group">
				<button type="submit" name="login" class="btn btn-outline-primary">Login</button>
			</div>

			<div class="form-group">

				<p>Not register yet? <a style="text-decoration: none" href="register.php">Register here</a></p>
			</div>

		</form>

	</div>
</div>


<?php require 'footer.php'; ?>



