<?php
//ALTERAÇÃO PARA PERMITIR ORDENAÇÃO
if (!isset($_POST["ordenar"])){
$ordenar="Nome";
}
else{
$ordenar=$_POST["ordenar"];
}

if($ordenar=='Nome'){
$ordenar_por="order by Nome";
}
if($ordenar=='Email'){
$ordenar_por="order by Email";
}
if($ordenar=='Idade'){
$ordenar_por="order by Idade";
}
if($ordenar=='Sexo'){
$ordenar_por="order by Sexo";
}
if($ordenar=='Username'){
$ordenar_por="order by Username";
}
if($ordenar=='Admin'){
$ordenar_por="order by Admin";
}
//Liga e escolhe a BD
include("ligaBD.php");

//NA AÇÃO SOBRE A BD EFETUAMOS UMA PEQUENA ALTERAÇÃO NA LINHA - $LISTA="SELECT * FROM ALUNO"; - 
//Ação sobre a BD
//$lista="select * from aluno";
$lista="select * from user $ordenar_por";
$faz_lista=mysqli_query($ligaBD,$lista);
$num_registos=mysqli_num_rows($faz_lista); //Devolve o número de linhas (registos) que se encontra na BD


//Verifica se não existem registos
if($num_registos==0){
	echo "Não existem, registos para listar.";
	exit;	
}
else
echo "N. total de registos: ".$num_registos;
?>

<table border="1">
<tr><th>Nome</th><th>Email</th><th>Idade</th><th>Sexo</th><th>Username</th><th>Admin</th></tr>

<?php
for ($i=0;$i<$num_registos;$i++){
	$registos=mysqli_fetch_array($faz_lista);//acede aos registos devolvidos pela mysqli_query
	echo'<tr>';
	echo'<td>'.$registos['Nome'].'</td>';
	echo'<td>'.$registos['Email'].'</td>';
	echo'<td>'.$registos['Idade'].'</td>';
	echo'<td>'.$registos['Sexo'].'</td>';
	echo'<td>'.$registos['Username'].'</td>';
		echo'<td>'.$registos['Admin'].'</td>';
		echo '<td><a class="tabela" href="editaluno.php?email='. $registos['Email']. '"> Editar &nbsp </a><a class="tabela" href="apagaluno.php?email='. $registos['Email'].'">&nbsp Apagar </a></td>';
	echo'</tr>';
}
?>
</table>
<!-- Dropbox com o evento onchange -->
<form method="POST" name="form1">
<b>Ordenar por:</b><select name="ordenar" onchange="javascript:form1.submit();">
	<option value="nenhum" SELECTED>    </option>
	<option value="Nome">Nome</option>
	<option value="Email">Email</option>
	<option value="Idade">Idade</option>
	<option value="Sexo">Sexo</option>
	<option value="Username">Username</option>
		<option value="Admin">Admin</option>
</select>	
</form>
<a href="index.php">Voltar</a>
