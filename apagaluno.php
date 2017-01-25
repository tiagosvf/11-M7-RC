<?php
include("ligaBD.php");

//Verifica se o utilizador pressionou algum link para apagar um aluno
if(isset($_GET['email'])){
	$apagar=$_GET["email"];
	$apagaluno="delete from user where email='".$apagar."'";
	$faz_apagaluno=mysqli_query($ligaBD,$apagaluno);
	echo "Utilizador eliminado <br></br><a href='index.php'>Voltar</a>";
	exit;
	
	}

//Captar dados do fromulário	
$pesquisa=$_GET["pesquisa"];
?>

