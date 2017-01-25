
<!doctype html>

 
<body>
<form method="post" action="regmarca.php">
<?php
include("ligaBD.php");
session_start();
$title = "Clinica Jadice Karai";
$content = '<div>
        <p>Preencha a sua marcação:</p>
 
        <form action="marcacoes.php" method="post">
			<p>Username: <input type="text" name="username" size="30" /></p>
            <p>Nome: <input type="text" name="nome" size="30" /></p>
            <p>idade: <input type="text" name="idade" size="20" /></p>
            <p>Sexo: <input type="text" name="sexo" size="9" /></p>
			<p>Data: <input type="text" name="data" size="9" /></p>
			<p>Hora: <input type="text" name="hora" size="9" /></p>
            <p><input type="checkbox" name="termo" value="Sim" /> Aceito o termo de responsabilidade.</p>
 
            <input type="submit" name="submit" value="Confirmar" />
            <input type="hidden" name="submitted" value="TRUE" />
			

			
			
        </form>
    </div>';

    // Verifica se o botão submitted foi ativado
    if (isset($_POST['submitted']))
    {
        $okay = TRUE;
        $ano = date("Y", time()); //date e time dia e a hora em que foi submtido. O "Y" serve para o ano ser representado por 4 digitos se for "y" o ano só tem 2 digitos
         
        // Verifica se o campo email foi preenchido
        if (empty($_POST['email'])) {
            echo '<p class="erro">Preencha o Email.</p>';
            $okay = FALSE;
        }
 
        // Verifica se o campo password foi preenchido
        if (empty($_POST['nome'])) {
            echo '<p class="erro">Prencha o Nome.</p>';
            $okay = FALSE;
        } 
		
         if ( !is_numeric($_POST['tele']) & (!strlen($_POST['tele']) == 9) ) 
		{
            echo '<p class="erro">Insira um número de 9 digitos.</p>';
            $okay = FALSE;
		}
		
		 


 
        // Verifica se os termos têm um visto
        if ( !isset($_POST['termo'])) {
            echo '<p class="erro">Deve aceitar o termo.</p>';
            $okay = FALSE;  
        }        
         
         
        if ($okay) {
            echo '<p>Operação com sucesso...</p>';
            
            // Termina o programa
            exit(0);
        }
    }
	
	if (empty($_SESSION["nome"])) { 
	include 'Template.php';
}
else{
	include'Template2.php';
}
?>

     
     
    
     
</body>
</html>


