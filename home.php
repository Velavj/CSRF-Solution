<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['postupdate'])){
	if(token::checkToken($val,$_COOKIE['Assignment_1'])){
		echo "<h3>My Post is : ".$_POST['postupdate'];	
	}
	else{
	echo "wrong".$_COOKIE['Assignment_1'];
	}
}
?>