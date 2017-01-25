<?php
$username=$_POST["username"];
$password=$_POST["password"];

include("ligaBD.php");


$existe="select * from user where username='".$username."'and password='".$password."'";
$faz_existe=mysqli_query($ligaBD,$existe);
$num_registos=mysqli_num_rows($faz_existe);

if($num_registos == 1)
{
	$registos=mysqli_fetch_array($faz_exist);
	session_start();
	$_SESSION["nome"]=$registos["nome"];
	header("location:aluno.php");
}
else
{
	header("localtion:index.html");
}


?>