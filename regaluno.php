
<!doctype html>

 
<body>

<?php
//captar dados do formul�rio
$email=$_POST["email"];
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$sexo=$_POST["sexo"];
$username=$_POST["username"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];

//verificar se as passwords s�o iguais antes de prosseguir
if ($password1!=$password2){
	echo "<p>As passwords devem ser iguais!";
	exit;
}

//Ligar e selecionar a Base de Dados escola
include("ligaBD.php");

//In�cio de a��o sobre a Base de Dados
$existe="select * from user where email='".$email."'or username='".$username."'"; //Verifica em todos os campos da tabela aluno se h� registos com email ou username
$faz_existe=mysqli_query($ligaBD,$existe); //Quest�o � Base de Dados
$jaexiste=mysqli_num_rows($faz_existe);//Conta o n�mero total de resultados devolvidos por uma Query � BD

//In�cio de verifica��o se aluno j� registado


if($jaexiste==0){
	//Inserir dados na tabela aluno
    $insere_aluno="insert into user(Email, Nome, Idade, Sexo, Username, Password) values('$email', '$nome','$idade','$sexo','$username','$password1')";
	//Processa a Query junto da Base de Dados
	$faz_insere_aluno=mysqli_query($ligaBD,$insere_aluno);
	$title = "Clinica Jadice Karai";
$content = "<div>
	<p>O utilizador foi registado com sucesso!</p>
	</div>";
}
else{
	$content = "<div>
	<p>O utilizador j� se encontra registado!</p>
	</div>";

 }
	
	
	include 'Template.php';
?>
	
</body>
</html>