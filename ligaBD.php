<?php
//Estabelece ligaзгo com o servidor (Host, utilizador, password)
$ligaBD=mysqli_connect("localhost","aires","123");
 
//Verificaзгo de erros
/*A instruзгo exit garante que o interpretador PHP nгo irб processar
mais nehnum cуdigo a partir desse momento*/
if (!$ligaBD){
    echo "<br>Erro: Nгo foi possнvel estabelecer ligaзгo com MySql"; 
    exit;
}
 
//Selecionar a Base de Dados (nome da ligaзгo, nome da BD)
$escolheBD=mysqli_select_db($ligaBD,'clinica');
 
//Verificaзгo de erros
if (!$escolheBD){
    echo "<br>Erro: Ao escolher a BD";
    exit;
}
 
?>

