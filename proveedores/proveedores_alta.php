<?php
$conexion = mysql_connect("localhost","root","") or die("Error en la Conexi&oacute;n al Servidor");
mysql_select_db("facturacion",$conexion) or die("Error en la Conexi&oacute;n a la Base de Datos");

$PROVEEDORES_DESCRIPCION=$_REQUEST['PROVEEDORES_DESCRIPCION'];
$PROVEEDORES_DOMICILIO= $_REQUEST['PROVEEDORES_DOMICILIO'];
$PROVEEDORES_TELEFONO= $_REQUEST['PROVEEDORES_TELEFONO'];

mysql_query ("
INSERT INTO proveedores
(PROVEEDORES_DESCRIPCION,
PROVEEDORES_DOMICILIO,
PROVEEDORES_TELEFONO) VALUES(
'$PROVEEDORES_DESCRIPCION',
'$PROVEEDORES_DOMICILIO',
'$PROVEEDORES_TELEFONO');",$conexion) or die ("Error de Sql");

mysql_close($conexion);

echo "Carga Realizada Correctamente";
print "<meta http-equiv=Refresh content=\"2 ; url= proveedores_reporte.php\">"
?>
 
