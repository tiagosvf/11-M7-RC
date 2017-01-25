<html>
<head>
<title>Registo</title>
</head>
<body>
<form method="post" action="regaluno.php">

<!doctype html>

 
<body>

<?php
include("ligaBD.php");
$title = "Clinica Jadice Karai";
$content = '<div>
<center><font size=20>Clinica Jadice Karai!</font></center>
<br></br>
<br></br>


	Email: <input type="text" name="email" size=37 maxlength=50> <br><br>
	Nome: <input type="text" name="nome" size=37 maxlength=20> <br><br>
	Idade: <input type="int" name="idade" size=37 maxlength=20> <br><br>
	Sexo: <input type="text" name="sexo" size=36 maxlength=20> <br><br>
	Username: <input type="int" name="username" size=38 maxlength=20> <br><br>
	Password: <input type="password" name="password1" size=34 maxlength=20> <br><br>
	Password (confirmacao): <input type="password" name="password2" size=20 maxlength=20> <br><br>

	<input type="submit" name="submit" value="Registo" />
            <input type="hidden" name="submitted" value="TRUE" />
	

	
	</form>
	</div>'
	;
	include 'Template.php';
	
	?>
	</body>
	</html>