
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Controlador Edit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
</head>

<div class="body"><body>
<?php
$conexion =mysql_connect ("localhost","root","") or die ('Error de Conexi&oacute;n al Servidor');
mysql_select_db ("facturacion",$conexion) or die ('Error de Conexi&oacute;n a la Base de Datos');
mysql_query (" UPDATE  productos SET 
RELA_PROVEEDORES='$_REQUEST[RELA_PROVEEDORES]',
PRODUCTOS_IVA='$_REQUEST[PRODUCTOS_IVA]',
PRODUCTOS_DESCUENTOS='$_REQUEST[PRODUCTOS_DESCUENTOS]',
PRODUCTOS_DESCRIPCION='$_REQUEST[PRODUCTOS_DESCRIPCION]',
PRODUCTOS_PU='$_REQUEST[PRODUCTOS_PU]',
PRODUCTOS_STOCK='$_REQUEST[PRODUCTOS_STOCK]',
PRODUCTOS_OBS='$_REQUEST[PRODUCTOS_OBS]'
WHERE ID_PRODUCTOS = $_REQUEST[ID_PRODUCTOS];",$conexion) or die ('Error SQL');
echo 'Actualizaci&oacute;n realizada con &Eacute;xito.';
print "<meta http-equiv=Refresh content=\"2 ; url= productos_reporte.php\">"
?>
</body></div>
</html>