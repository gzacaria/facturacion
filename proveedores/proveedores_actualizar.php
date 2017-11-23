
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexion =mysql_connect ("localhost","root","") or die ('Error de Conexi&oacute;n al Servidor');
mysql_select_db ("facturacion",$conexion) or die ('Error de Conexi&oacute;n a la Base de Datos');
mysql_query (" UPDATE  proveedores SET 
PROVEEDORES_DESCRIPCION='$_REQUEST[PROVEEDORES_DESCRIPCION]',
PROVEEDORES_DOMICILIO='$_REQUEST[PROVEEDORES_DOMICILIO]',
PROVEEDORES_TELEFONO='$_REQUEST[PROVEEDORES_TELEFONO]'
WHERE ID_PROVEEDORES = $_REQUEST[ID_PROVEEDORES];",$conexion) or die ('Error SQL');
echo 'Actualizaci&oacute;n realizada con &Eacute;xito.';
print "<meta http-equiv=Refresh content=\"2 ; url= proveedores_reporte.php\">"
?>
</body>
</html>