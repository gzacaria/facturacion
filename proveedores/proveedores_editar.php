<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Editar Entidad</h1>
<form action="proveedores_actualizar.php" method="POST">
<?php
$conexion =mysql_connect ("localhost","root","") or die ('Error de conexion al servidor');
mysql_select_db("facturacion",$conexion) or die ('Error de conexion a la base de datos');
$registros= mysql_query ("SELECT * FROM proveedores WHERE ID_PROVEEDORES= $_REQUEST[ID_PROVEEDORES];",$conexion) or die ('error sql');
if ($reg =mysql_fetch_array($registros))
{
?>
<table align="center">
<tr>
<td>Editar Descripcion: </td>
<td><input type="text" name="PROVEEDORES_DESCRIPCION" value ="<?php echo $reg['PROVEEDORES_DESCRIPCION']?>"></td>
</tr>
<tr>
<td>Editar Direcci&oacute;n: </td>
<td><input type="text" name="PROVEEDORES_DOMICILIO" value ="<?php echo $reg['PROVEEDORES_DOMICILIO']?>"></td>
</tr>
<td>Editar N� de Tel&eacute;fono: </td>
<td><input type="text" name="PROVEEDORES_TELEFONO" value ="<?php echo $reg['PROVEEDORES_TELEFONO']?>"></td>
</tr>
<td>
<td><input type="hidden" name="ID_PROVEEDORES" value="<?php echo $reg['ID_PROVEEDORES']?>"></td>
</tr>
<tr>
<td><input type="submit" value="Guardar Cambios"></td>
</tr>
</table>
<?php
}
else
{
echo 'No existen datos para esa entidad';
}
?>
</form>

</body>
</html>