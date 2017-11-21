<?php
$conexion=mysql_connect("localhost","root","") or die('Error de SQL');
mysql_select_db("facturacion",$conexion) or die('Error en la Conexion a la BD');
mysql_query("
UPDATE `personas` SET `PERSONAS_ESTADO`='Fallecido' WHERE `ID_PERSONAS`=$_REQUEST[ID_PERSONAS];",$conexion) or die('Error SQL');
echo 'Registro Actualizado Correctamente';
print "<meta http-equiv=Refresh content=\"2 ; url=personas_reporte.php\">"; 
?>