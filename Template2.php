<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
	<?php
	
	 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	  
	  $nome = $_SESSION["nome"];
	  
	  		
			
	?>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
			
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="equipa.php">Equipa</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
					<li><a href="marcacoes.php">Marcações</a></li>

					<?php 
						$dados_pessoa = mysqli_query($ligaBD,"SELECT * FROM user WHERE Username = '$nome'");
						$dados = mysqli_fetch_array($dados_pessoa);
					?>
					<li><a href="<?php if($dados["Admin"] == 1){echo "admin.php";}else{echo "user.php";}?>"><?php  $nome = $_SESSION["nome"]; echo"$nome"; ?> </a></li>
					
					<a href="sair.php">Logout</a>
					
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>João Aires nº15 11ºH || Tiago Ferreira nº24 11ªH</p>
            </footer>
        </div>
    </body>
</html>
