<?php
//Este ficheiro é responsável por destruir a sessão

Session_start();
unset($_SESSION["nome"]);
header("Location:index.php");

?>