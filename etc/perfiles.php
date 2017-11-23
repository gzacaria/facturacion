<?php
$conex = mysql_connect("localhost","root","") or die("Error de Conexi&oacute;n");
mysql_select_db("facturacion",$conex) or die("Error de BD");
$usuario = $_POST['US_NOMBRE'];
$password = $_POST['US_PASSWORD'];

$consulta = "select * from usuarios where US_NOMBRE = '".$usuario."' and US_PASSWORD = '".$password."'";

?>