
<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
       
	   <a href="pesquisa.php">Pesquisar utilizador</a>
	   <br></br>
	     <a href="listaaluno.php">Listar e editar utilizadores</a>
		 
		 
	   
    </div>';


	
	if (empty($_SESSION["nome"])) { 
	include 'Template.php';
}
else{
	include'Template2.php';
}
?>

     
     



