<!doctype html>

 
<body>

<?php
//captar dados do formulário
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$sexo=$_POST["sexo"];
$username=$_POST["username"];

//verificar se as passwords são iguais antes de prosseguir

//Ligar e selecionar a Base de Dados escola
include("ligaBD.php");

//Início de ação sobre a Base de Dados
$existe="select * from marcacoes where email=username='".$username."'"; //Verifica em todos os campos da tabela aluno se há registos com email ou username
$faz_existe=mysqli_query($ligaBD,$existe); //Questão à Base de Dados
$jaexiste=mysqli_num_rows($faz_existe);//Conta o número total de resultados devolvidos por uma Query à BD

//Início de verificação se aluno já registado


if($jaexiste==0){
	//Inserir dados na tabela aluno
    $insere_aluno="insert into marcacoes(Nome, Idade, Sexo, Username) values( '$nome','$idade','$sexo','$username')";
	//Processa a Query junto da Base de Dados
	$faz_insere_aluno=mysqli_query($ligaBD,$insere_aluno);
	$title = "Clinica Jadice Karai";
$content = "<div>
	<p>A consulta foi marcada com sucesso!</p>
	</div>";
}
else{
	$content = "<div>
	<p>A consulta não foi marcada com sucesso!</p>
	</div>";

 }
	
	
	include 'Template.php';
?>
	
</body>
</html>