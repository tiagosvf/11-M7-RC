<?php
//Este ficheiro � respons�vel por destruir a sess�o

Session_start();
unset($_SESSION["nome"]);
header("Location:index.php");

?>