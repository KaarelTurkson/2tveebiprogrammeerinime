<?php

	//echo $_GET["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
	echo "jah";
	}
?>




<html>
	<head>
		<title>Login page</title>
	</head>
	
	<body>
		<h2>Login</h2>
		<form action="login.php" method="post">
		<input name="email"type="email" placeholder="E-post"> <br><br>
		<input name="password"type="password" placeholder="Parool"> <br><br>
		<input type="Submit" placeholder="Logi sisse"> <br><br>
		</form>
		
		<h2>Create user</h2>
		
	
	
	</body>

</html>
;