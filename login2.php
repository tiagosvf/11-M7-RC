
<!doctype html>

 
<body>

<?php
include("ligaBD.php");
$title = "Clinica Jadice Karai";
$content = '<div>

<form method="POST" action="login_d.php">

	Username: <input type="text" name="username" size=20 maxlength=20> <br><br>
	Password: <input type="password" name="password" size=20 maxlength=20> <br><br>
	<input type="submit" value="Entrar">&nbsp;&nbsp;
	<a href="registo.php"><i>Registe-se</i></a>

	<?php

	?>
	
	</form>
	</div>'
    ;

	include 'Template.php';
?>

     
     
    
     
</body>
</html>


