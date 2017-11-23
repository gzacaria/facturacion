<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_reporte.css">
<link rel="stylesheet" href="../estilos/estilos_login.css">
<title>Reporte de Personas</title>
<div class="header"><h1 align="center">Reporte de Clientes</h1></div>
</head>

<div class="body">
<body>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de Conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error de Conexi&oacute;n a la BD");
$sql="SELECT * FROM vista_clientes_personas WHERE CLIENTES_ESTADO NOT LIKE '%B%';";
$registros=mysql_query($sql,$conexion) or die("Error de SQL");

echo '<div class="datagrid">';
echo '<table align="center">';
echo '<thead>';
echo'<tr><th>Apellido y Nombre</th>
<th>Documento</th>
<th>Estado Persona</th>
<th>Estado Clientes</th>
<th>Fecha Clientes</th>
<th>Monto de Mora</th>
<th></th>
<th></th>
<th></th>
</tr>';
echo '</thead>';
while($row=mysql_fetch_array($registros))
{
echo '<tr>';
echo '<td>';
echo $row['PERSONAS_AYN'];
echo '</td>';
echo '<td>';
echo $row['PERSONAS_DNI'];
echo '</td>';
echo '<td>';
echo $row['PERSONAS_ESTADO'];
echo '</td>';
echo '<td>';
echo $row['CLIENTES_ESTADO'];
echo '</td>';
echo '<td>';
echo $row['CLIENTES_FECHA_ALTA'];
echo '</td>';
echo '<td>';
echo $row['CLIENTES_IMPORTE_MORA'];
echo '</td>';
echo '<td>';
echo '<a href = "clientes_editar.php?ID_CLIENTES='.$row['ID_CLIENTES'].'"><img src="../imagenes/actualizar.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '<td>';
echo '<a href = "clientes_eliminar.php?ID_CLIENTES='.$row['ID_CLIENTES'].'"><img src="../imagenes/borrar.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '<td>';
echo '<a href = "clientes_fallecido.php?ID_CLIENTES='.$row['ID_CLIENTES'].'"><img src="../imagenes/borrar-usuario.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '</tr>';
}
echo '</table>';
?>
</div>
<br>
<div class="links"><a href="clientes_formulario_alta.php">Agregar Cliente</a></div>
</body>
</div>
</html>
