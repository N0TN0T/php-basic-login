<?php
	include 'db_connection.php';
	$conect = mysqli_connect("localhost","root");
	mysqli_select_db($conect, "login_simples");
	
$myfile = fopen("newfile.txt", "r");
$id = fread($myfile,filesize("newfile.txt"));
fclose($myfile);
$dados = mysqli_query($conect, "select * from users where ID= '".$id."'");
$row = mysqli_fetch_assoc($dados);
$username = $row['username'];
$password = $row['password'];
$email = $row['Email'];



echo "<form method=\"get\" action=\"Formulario.php\"><br><br><br><br><br><br><br><u style=\"color:white\"><h1 style=\"text-align:center; font-family:impact; color:white; font-size:500%\">LOGIN FEITO COM SUCESSO!!!!</h1></u>

<h3 style=\"text-align:center; font-family:verdana; color:white\">ID: ";
echo $id;
echo "</h3>";

echo "<h3 style=\"text-align:center; font-family:verdana; color:white\">Username: ";
echo $username;
echo "</h3>";

echo "<h3 style=\"text-align:center; font-family:verdana; color:white\">Password: ";
echo $password;
echo "</h3>";

echo "<h3 style=\"text-align:center; font-family:verdana; color:white\">Email: ";
echo $email;
echo "</h3>";


?>

<html>

<head>

</head>
<body style="background-image: url('mqfP5D.jpg');">

</body>
</html

