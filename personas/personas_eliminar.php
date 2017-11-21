<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Control M&oacute;dulo Eliminaci&oacute;n Personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexion=mysql_connect("localhost","root","") or die('Error de SQL');
mysql_select_db("facturacion",$conexion) or die('Error en la Conexion a la BD');
mysql_query("
DELETE FROM `personas` WHERE `ID_PERSONAS`=$_REQUEST[ID_PERSONAS];",$conexion) or die('Error SQL');
echo 'Eliminaci&oacute;n realizada con &eacute;xito';
print "<meta http-equiv=Refresh content=\"2 ; url=personas_reporte.php\">"; 
?>
</body>
</html>
