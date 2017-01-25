<!doctype html>

 
<body>

<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1513.2971643439082!2d-7.908675432351206!3d40.660870038984946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23364efda9817d%3A0xdf8a13bd328c4a2d!2sR.+Mte.+Teot%C3%B3nio+Pedro+Albuquerque%2C+3500-048+Viseu!5e0!3m2!1spt-PT!2spt!4v1447065988407" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

