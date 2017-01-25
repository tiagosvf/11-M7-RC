<?php

//Captar dados do URL
$email=$_GET["email"];

//Captar os dados do formulário
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$sexo=$_POST["sexo"];
$username=$_POST["username"];
$admin=$_POST["admin"];

//liga e escolhe a BD
include("ligaBD.php");


//Ação sobre a BD
$atualizar="update user set Nome='$nome', Idade='$idade', Sexo='$sexo', Username='$username', Admin='$admin' WHERE Email='$email'";
$faz_atualizar=mysqli_query($ligaBD,$atualizar);
echo"<p>O utilizador foi atualizado com sucesso!";

?>
<br>
<a href="index.php">Voltar</a>