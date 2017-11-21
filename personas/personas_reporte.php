<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos.css">
<title>Reporte de Personas</title>
<meta http-equiv="Content-Type" charset="UTF-8" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1 align="center">Reporte de Personas</h1>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de Conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error de Conexi&oacute;n a la BD");
$sql="SELECT * FROM `personas` WHERE personas_estado LIKE '%alta%';";
$registros=mysql_query($sql,$conexion) or die("Error de SQL");
echo '<table>';
echo'<tr><th>Apellido y Nombre</th><th>Documento</th><th>Estado</th></tr>';
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
echo '<a href = "personas_editar.php?ID_PERSONAS='.$row['ID_PERSONAS'].'"><img src="../imagenes/actualizar.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '<td>';
echo '<a href = "personas_eliminar.php?ID_PERSONAS='.$row['ID_PERSONAS'].'"><img src="../imagenes/borrar.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '<td>';
echo '<a href = "personas_fallecido.php?ID_PERSONAS='.$row['ID_PERSONAS'].'"><img src="../imagenes/borrar-usuario.png" width="20" height="23" align="middle"></a>';
echo '</td>';
echo '</tr>';
}
echo '</table>';
?>
<a href="formulario_alta_personas.php">Agregar Entidad</a>
</body>
</html>
