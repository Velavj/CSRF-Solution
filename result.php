<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'Viji' && $pwd == 'admin'){
		echo '<h1><b>Successfully logged in</b></h1>';
		
	}
	else{
		echo 'Invalid Inputs';
		exit();
	}
	
}


?>


<!DOCTYPE html>
<html>
	<head>
		<title>CSRF Solution</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>
		<form action="home.php" method="post">
			<div class="login" align="center">
				<H1>Write Something</H1>
					<div class="credentials" align="center">
							<b>Post Here: </b><input type="text" name="postupdate">
					</div>
					<br />
					<input type="Submit" value="Update">
					
					<div id="div1" align="center">
					<input type="hidden" name="token" value="" id="token_to_be_added"/>
					</div>
			</div>
		</form>
		
	</body> 
</html>
