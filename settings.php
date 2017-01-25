<html>
<body>
<?php
include("ligaBD.php");
//Captar o email através de URL
$email=$_GET["email"];



$editar="select * from user where email='".$email."'";
$faz_editar=mysqli_query($ligaBD,$editar);
$registos=mysqli_fetch_array($faz_editar);

?>
<!--Passagem da variável email por URL-->

<form action="atualizaluno.php?email=<?php echo $email;?>" method="POST"> 
Nome:<input type="text" name="nome" value='<?php echo $registos["nome"];?>'><br>
Idade:<input type="text" name="idade" size="2" value='<?php echo $registos["idade"];?>'><br>
Sexo:<input type="text" name="turma" size="2" value='<?php echo $registos["sexo"];?>'><br>
<input type="submit" value="Atualizar"><br>
</form>
</body>
</html>