
<!doctype html>

 
<body>

<?php
//captar dados do formulário
$email=$_POST["email"];
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$sexo=$_POST["sexo"];
$username=$_POST["username"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];

//verificar se as passwords são iguais antes de prosseguir
if ($password1!=$password2){
	echo "<p>As passwords devem ser iguais!";
	exit;
}

//Ligar e selecionar a Base de Dados escola
include("ligaBD.php");

//Início de ação sobre a Base de Dados
$existe="select * from user where email='".$email."'or username='".$username."'"; //Verifica em todos os campos da tabela aluno se há registos com email ou username
$faz_existe=mysqli_query($ligaBD,$existe); //Questão à Base de Dados
$jaexiste=mysqli_num_rows($faz_existe);//Conta o número total de resultados devolvidos por uma Query à BD

//Início de verificação se aluno já registado


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
	<p>O utilizador já se encontra registado!</p>
	</div>";

 }
	
	
	include 'Template.php';
?>
	
</body>
</html>