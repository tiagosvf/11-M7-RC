<!doctype html>

 
<body>

<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
        <center><p><b>Equipa</b></p></center>
		<p><b>Administradores</b></p>
		<p>Joao Aires Campos Fernandes<p> <p>Tiago Santos Vaz Ferreira</p>
		
 
        
            
			

			
			
        </form>
    </div>';
if (empty($_SESSION["nome"])) { 
	include 'Template.php';
}
else{
	include'Template2.php';
}
?>

     
     
    
     
</body>
</html>