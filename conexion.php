<?php

//conexion.php

$server="localhost";
$usuario_db="free_fabian";
$clave_db="Trag&25lz19$";
$base="free_barra";

$id_con=mysql_connect($server,$usuario_db,$clave_db);
mysql_select_db($base,$id_con);
?>