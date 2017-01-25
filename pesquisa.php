
<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
       
<html>
<head>

</head>
<body>
<form method="GET" action="pesqaluno.php">
	<h2>Escreva o nome a pesquisar</h2>
	<input type="text" name="pesquisa">&nbsp&nbsp
	<input type="submit" value="Pesquisar"><br><br>
</form>
</body>
</html>
	   
    </div>';


	
	if (empty($_SESSION["nome"])) { 
	include 'Template.php';
}
else{
	include'Template2.php';
}
?>

     
     
