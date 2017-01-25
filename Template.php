<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />			
		<?php 
			if(isset($_GET["func"]) == "termSe")
				session_destroy();
		?>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
				<center>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="equipa.php">Equipa</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
					<li><a href="login2.php">Login</a></li>
					<li><a href="registo.php">Registrar</a></li></center>
					
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
