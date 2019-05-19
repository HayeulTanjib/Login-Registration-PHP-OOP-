<?php require 'header.php'; ?>

<?php 

session_start();

if (!isset($_SESSION['user_id'])) {
	
	header('location:login.php');
}

 ?>





<div class="card mt-5">

<div class="card-header text-right">
	<span><a class="btn btn-danger" href="logout.php">Logout</a></span>
</div>

	<div class="card-header text-center">
		<h1>Home Page </h1>


	</div>


	<div class="card-body">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur numquam laboriosam expedita, distinctio fugit. Quam nam, amet. Tenetur enim voluptatem repellendus dolore amet doloribus ducimus similique adipisci, placeat cupiditate tempora.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur numquam laboriosam expedita, distinctio fugit. Quam nam, amet. Tenetur enim voluptatem repellendus dolore amet doloribus ducimus similique adipisci, placeat cupiditate tempora.</p>
	</div>
</div>



<?php require 'footer.php'; ?>



	