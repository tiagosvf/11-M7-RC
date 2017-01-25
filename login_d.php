<?php
//captar dados do formulário da página index.html
$username=$_POST["username"];
$password=$_POST["password"];

//liga e escolhe a BD
include("ligaBD.php");

//Verifica se username/password existem na BD
$existe="select * from user where username='".$username."'and password='".$password."'";
$faz_existe=mysqli_query($ligaBD,$existe);
$num_registos=mysqli_num_rows($faz_existe);

if ($num_registos == 1){
	$registos = mysqli_fetch_array($faz_existe);
	session_start();
	$_SESSION["nome"] = $username;
	header("Location:index.php");
}
else{
	header("Location:login2.php");
	}

?>
