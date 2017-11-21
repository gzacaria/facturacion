<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>M&oacute;dulo Mantenimiento Entidades</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>M&oacute;dulo Mantenimiento Entidades</h1>
<form action="personas_editar.php" method="post">
<table>
<tr>
<td>Seleccionar Entidad:</td>
<td><select name="id_personas">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexion");
mysql_select_db("practico2",$conexion) or die("Error en la conexion a la base de datos");
$buscar=mysql_query("
SELECT*FROM `personas` WHERE `personas_estado` NOT LIKE '%fallecido%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['id_personas'].'">'.$row['personas_ayn'].'-Documento:-'.$row['personas_dni'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
</select>
</td>
</tr>
<tr><td><input type="submit" value="Editar"></td></tr>
</table>


</form>
<form action="personas_eliminar.php" method="post">
<table>
<tr>
<td>Seleccionar Entidad:</td>
<td><select name="id_personas">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexion");
mysql_select_db("practico2",$conexion) or die("Error en la conexion a la base de datos");
$buscar=mysql_query("
SELECT*FROM `personas` WHERE `personas_estado` NOT LIKE '%fallecido%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['id_personas'].'">'.$row['personas_ayn'].'-Documento:-'.$row['personas_dni'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
</select>
</td>
</tr>
<tr><td><input type="submit" value="Eliminar"></td></tr>
</table>
</form>
</body>
</html>
