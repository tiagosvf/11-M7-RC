<html>
<body>
<?php

//Captar o email através de URL
$email=$_GET["email"];

include("ligaBD.php");

$editar="select * from user where Email='".$email."'";
$faz_editar=mysqli_query($ligaBD,$editar);
$registos=mysqli_fetch_array($faz_editar);

?>
<!--Passagem da variável email por URL-->

<form action="atualizaluno.php?email=<?php echo $email;?>" method="POST"> 
Nome:<input type="text" name="nome" value='<?php echo $registos["Nome"];?>'><br>
Idade:<input type="text" name="idade" size="2" value='<?php echo $registos["Idade"];?>'><br>
Sexo:<input type="text" name="sexo" size="2" value='<?php echo $registos["Sexo"];?>'><br>
Username:<input type="text" name="username" size="2" value='<?php echo $registos["Username"];?>'><br>
Admin:<input type="text" name="admin" size="2" value='<?php echo $registos["Admin"];?>'><br>
<input type="submit" value="Atualizar"><br>
</form>
</body>
</html>