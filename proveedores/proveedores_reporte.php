<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_reporte.css">
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Reporte de Proveedores</title></head>

<div class="body">
<body>
<div class="header"><h1 align="center">Reporte de Proveedores</h1></div>
<?php
$conexion = mysql_connect ("localhost","root", "") or die; 
mysql_select_db("facturacion",$conexion) or die;
$sql= "SELECT * FROM proveedores";
$registros= mysql_query ($sql,$conexion) or die ();
echo '<div class="datagrid">';
echo '<table align="center">';
echo '<thead>';
echo '<tr><th>Descripci&oacute;n</th>
	  <th>Domicilio</th>
	  <th>Nro. de Tel&eacute;fono</th>
	  <th></th>
	  <th></th></tr>';
echo '</thead>';
while ($row=mysql_fetch_array($registros))
{
echo '<tbody>';
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
echo '</tbody>';
echo'</table>';
echo '</div>';
?>
<br>
<div class="links"><a href="proveedores_formulario.php">Nuevo Proveedor</a></div>
</body>
</div>
</html>
