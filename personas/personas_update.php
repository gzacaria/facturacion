<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Control M&oacute;dulo Mantenimiento Personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexion=mysql_connect("localhost","root","") or die('Error de SQL');
mysql_select_db("facturacion",$conexion) or die('Error en la Conexi&oacute;n a la BD');
mysql_query("
UPDATE personas SET
PERSONAS_AYN='$_REQUEST[PERSONAS_AYN]',
PERSONAS_DNI='$_REQUEST[PERSONAS_DNI]',
PERSONAS_FEC_NAC='$_REQUEST[PERSONAS_FEC_NAC]',
PERSONAS_TELEFONO='$_REQUEST[PERSONAS_TELEFONO]',
PERSONAS_SEXO='$_REQUEST[PERSONAS_SEXO]',
PERSONAS_DOMICILIO='$_REQUEST[PERSONAS_DOMICILIO]',
PERSONAS_ESTADO='$_REQUEST[PERSONAS_ESTADO]'
WHERE ID_PERSONAS=$_REQUEST[ID_PERSONAS];",$conexion) or die('Error SQL');
echo 'Actualizaci&oacute;n realizada con &eacute;xito';
print "<meta http-equiv=Refresh content=\"2 ; url=personas_reporte.php\">";
?>
</body>
</html>
