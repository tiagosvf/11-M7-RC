<!DOCTYPE html>

<?php
header('Content-Type: text/html; charset=utf8');
//Captar dados do formulário
$pesquisa=$_GET["pesquisa"];

//Liga e escolhe a BD
include("ligaBD.php");

//Ação sobre a BD
$procura="select * from user where nome like '%".$pesquisa."%'";//Procura (like) na tabela aluno o nome semelhante ao introduzido na pesquisa. 
//Caracter % é o mesmo que * (todos caracteres)
$faz_procura=mysqli_query($ligaBD,$procura);
$num_registos=mysqli_num_rows($faz_procura); //Devolve o número de linhas (registos) que se encontra na BD

//Verifica se existem registos
if ($num_registos==0){
	echo "Não existem registos com esse nome.</br></br>";
	echo '<a href="pesquisa.html">Voltar</a>';
	exit;
}
echo 'N.º total de registos encontrados: '.$num_registos;
?>
<table border="1">
<tr><th>Nome</th><th>Email</th><th>Idade</th><th>Sexo</th><th>Username</th><th>Admin</th><th>Opções</th></tr>



<?php
for ($i=0;$i<$num_registos;$i++){
	$registos=mysqli_fetch_array($faz_procura); //acede aos registos devolvidos pela mysqli_query
	echo'<tr>';
	echo'<td>'.$registos['Nome'].'</td>';
	echo'<td>'.$registos['Email'].'</td>';
	echo'<td>'.$registos['Idade'].'</td>';
	echo'<td>'.$registos['Sexo'].'</td>';
	echo'<td>'.$registos['Username'].'</td>';
		echo'<td>'.$registos['Admin'].'</td>';
	//ACRESCENTAR---> cada link edita/remove apenas o aluno da linha respetiva, baseado na informação única, chave primária email.
	//Passagem da variável email por URL
	echo '<td><a class="tabela" href="editaluno.php?email='. $registos['Email']. '"> Editar &nbsp </a><a class="tabela" href="apagaluno.php?email='. $registos['Email'].'">&nbsp Apagar </a></td>';
	echo'</tr>';
}
?>
</table>
<!--ACRESCENTAR A COLUNA OPÇÕES-->

<br></br>
<a href="index.php">Voltar</a>
