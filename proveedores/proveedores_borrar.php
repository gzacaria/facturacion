<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modulo para eliminar registros de personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexion =mysql_connect ("localhost","root","") or die ('Error de Conexi&oacute;n');
mysql_select_db ("facturacion",$conexion) or die ('Error de conexi&oacute;n a la Base de Datos');
mysql_query ("DELETE FROM proveedores WHERE ID_PROVEEDORES =$_REQUEST[ID_PROVEEDORES];",$conexion) or die ('error sql');
echo 'Eliminaci&oacute;n Realizada con &Eacute;xito.';
print "<meta http-equiv=Refresh content=\"2 ; url= proveedores_reporte.php\">"
?>
</body>
</html>
