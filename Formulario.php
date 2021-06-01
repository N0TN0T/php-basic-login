<!DOCTYPE HTML>
<html>

<head>

</head>

<body style="background-image: url('mqfP5D.jpg');">
	<h1 style="font-family:verdana; text-align:center; color:white; font-size:65%">Mentor: João Beirão nº14</h1>
	<h1 style="font-family:verdana; text-align:center; color:white; font-size:65%">Mentorado: Duarte Soeiro nº8</h1>
	<br>
	<br>
	<br>
	<h1 style="text-align:center; font-family:impact; color:white; font-size:700%">LOGIN EM PHP</h1>
	<form method="POST" style="font-family:verdana; color:white; text-align:center ; font-size:100%">
		Username <input type="text" name="username" class="text" autocomplete="off" required><br>
		Password <input type="password" name="password" class="text" required><br>
		<input type="Submit" name="submit" id="submit">
	</form>
	<br>
	<form method="get" action="Formulario3.php" style="text-align:center">
	<button type="submit">Sign in</button>
	</form>
</body>
</html>

<?php
	$id;
	include 'db_connection.php';
	$conect = mysqli_connect("localhost","root");
	mysqli_select_db($conect, "login_simples");
	

	if(isset($_POST['submit'])){
		$un=$_POST['username'];
		$pw=$_POST['password'];
		$sql=mysqli_query($conect, "select * from users where username='".$un."'AND Password='".$pw."' limit 1");
		/*saber numero de registos*/
		$sqlNumRows = mysqli_query($conect, "select * from users");
		$NumRows = mysqli_num_rows($sqlNumRows);
		
		$id = 0;
		
		if(mysqli_num_rows($sql)==1){
			
			for($i=0; $i<=$NumRows; $i++){
				/*receber ID*/
				$sqlGetID=mysqli_query($conect, "select * from users where ID= '".$i."' AND username='".$un."'AND Password='".$pw."' limit 1");
				if(mysqli_num_rows($sqlGetID)==1){
					
					$id = " ".$i." ";
					
				}
				
			}
			
			/*criar ficheiro*/
			$myfile = fopen("newfile.txt", "w");
			fwrite($myfile, $id);
			fclose($myfile);


			
			header("location:Formulario2.php");
				exit();
		}
		else
			echo '<span style= "color:white; font-family:verdana; text-align:center">"Utilizador ou password errados"</span>';

	}

?>