
<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
       

	   
    </div>';


	
	if (empty($_SESSION["nome"])) { 
	include 'Template.php';
}
else{
	include'Template2.php';
}
?>

     
     



