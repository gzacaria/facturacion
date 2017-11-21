<?php
$conexion=mysql_connect("localhost","root","") or die('Error de SQL');
mysql_select_db("facturacion",$conexion) or die('Error en la Conexion a la BD');
mysql_query("
UPDATE `clientes` SET `CLIENTES_ESTADO`='B' WHERE `ID_CLIENTES` = {$_REQUEST['ID_CLIENTES']};",$conexion) or die('Error SQL');
echo 'Registro Actualizado Correctamente';
print "<meta http-equiv=Refresh content=\"2 ; url=clientes_reporte.php\">"; 
?>