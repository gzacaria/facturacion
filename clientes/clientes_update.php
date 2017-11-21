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
UPDATE clientes SET 
CLIENTES_IMPORTE_MORA='$_REQUEST[CLIENTES_IMPORTE_MORA]' 
WHERE ID_CLIENTES=$_REQUEST[ID_CLIENTES];",$conexion) or die('Error SQL');
echo 'Actualizaci&oacute;n realizada con &eacute;xito';
print "<meta http-equiv=Refresh content=\"2 ; url=clientes_reporte.php\">";
?>
</body>
</html>
