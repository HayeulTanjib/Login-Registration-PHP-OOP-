<?php 



try {


	$pdo = new PDO ('mysql:host=localhost; dbname=polo_login','root','');
	
} catch (PDOException $e) {
	
	echo "<strong style=color:red;>Database Connection Error! </strong>".'<mark>'.$e->getMessage().'</mark>';
}


