<!DOCTYPE HTML>
<html>

<head>

</head>

<body style="background-image: url('mqfP5D.jpg');">
	<form method="get" action="Formulario.php">
	<button type="submit">Home Page</button>
	</form>
	<br>
	<br>
	<br>
	<h1 style="text-align:center; font-family:impact; color:white; font-size:400%">INSIRA OS SEUS DADOS</h1>
	<form method="POST" style="font-family:verdana; color:white; text-align:center">
		
		E-mail <input type="text" name="email" class="text" autocomplete="off" required><br>
		Username <input type="text" name="username" class="text" autocomplete="off" required><br>
		Password <input type="password" name="password" class="text" required><br>
		<input type="Submit" name="submit" id="submit">

	
		
	</form>
	
</body>
</html>

<?php
	include 'db_connection.php';
	$conect = mysqli_connect("localhost","root");
	mysqli_select_db($conect, "login_simples");
	

	if(isset($_POST['submit'])){
		$em=$_POST['email'];
		$un=$_POST['username'];
		$pw=$_POST['password'];
		$sql=mysqli_query($conect, "INSERT into users (username, password, Email) VALUES ('".$un."', '".$pw."', '".$em."')");
		
			echo '<span style= "color:white; font-family:verdana; text-align:center">"Utilizador criado com sucesso"</span>';
		exit();
	}

?>