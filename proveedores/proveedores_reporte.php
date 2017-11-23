<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1 align="center">Reporte de Proveedores</h1>
<?php
$conexion = mysql_connect ("localhost","root", "") or die; 
mysql_select_db("facturacion",$conexion) or die;
$sql= "SELECT * FROM proveedores";
$registros= mysql_query ($sql,$conexion) or die ();
echo '<table align="center">';
echo '<tr></th><th>Descripci&oacute;n</th><th>Domicilio</th><th>Nº de Tel&eacute;fono</th><th></th></tr>';
while ($row=mysql_fetch_array($registros))
{
echo'<tr>';
echo '<td>';
echo $row['PROVEEDORES_DESCRIPCION'];
echo '</td>';

echo '<td>';
echo $row['PROVEEDORES_DOMICILIO'];
echo '</td>';

echo '<td>';
echo $row ['PROVEEDORES_TELEFONO'];
echo '</td>';






echo '<td>';
echo '<a href = "proveedores_editar.php?ID_PROVEEDORES='.$row['ID_PROVEEDORES'].'"><img src="../imagenes/actualizar.png" width="20" height="23" align="middle"></a>';
 echo '</td>';
echo '<td>';
 echo '<a href = "proveedores_borrar.php?ID_PROVEEDORES='.$row['ID_PROVEEDORES'].'"><img src="../imagenes/borrar.png" width="20" height="23" align="middle"></a>';
 echo '</td>';
 




echo'</tr>';
}

echo'</table>';
?>
<br>
<div align="center"><a href="proveedores_formulario.php">Nuevo Proveedor</a></div>
</body>
</html>
