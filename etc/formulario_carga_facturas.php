<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1 align="center">M&oacute;dulo de Facturaci&oacute;n</h1>
<form action="grabar_detalle_facturas.php" method="post">
<table align="center">
<tr>
<td>Seleccionar Cliente:</td>
<td>
<select name="RELA_CLIENTES">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error en la conexi&oacute;n a la base de datos");
$buscar=mysql_query("
SELECT*FROM `VISTA_CLIENTES_PERSONAS` WHERE `CLIENTES_ESTADO` LIKE '%Alta%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['ID_CLIENTES'].'">'.$row['PERSONAS_AYN'].'-Documento:-'.$row['PERSONAS_DNI'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
</select>
</td>
</tr>
<tr>
<td>Seleccionar el Tipo de Factura:</td>
<td><select name="select">
  <option value="">Seleccionar...</option>
  <option value="A">Tipo A</option>
  <option value="B">Tipo B</option>
  <option value="C">Tipo C</option>
</select></td>
</tr>



</table>
<p>&nbsp;</p>
<p align="center"><strong>Cargar el Detalle de la Factura </strong></p>
<p align="center">
  <select name="rela_personas">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error en la conexi&oacute;n a la base de datos");
$buscar=mysql_query("
SELECT*FROM `clientes` WHERE `clientes_estado` LIKE '%Alta%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['id_personas'].'">'.$row['personas_ayn'].'-Documento:-'.$row['personas_dni'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
</select>
  <input type="text" name="textfield">
</p>
<p align="center">
  <select name="select2">
    <option value="">Seleccionar...</option>
    <?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error en la conexi&oacute;n a la base de datos");
$buscar=mysql_query("
SELECT*FROM `clientes` WHERE `clientes_estado` LIKE '%Alta%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['id_personas'].'">'.$row['personas_ayn'].'-Documento:-'.$row['personas_dni'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
  </select>  
  <input type="text" name="textfield2">
</p>
<p align="center">
  <select name="rela_personas">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexi&oacute;n");
mysql_select_db("facturacion",$conexion) or die("Error en la conexi&oacute;n a la base de datos");
$buscar=mysql_query("
SELECT*FROM `clientes` WHERE `clientes_estado` LIKE '%Alta%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['id_personas'].'">'.$row['personas_ayn'].'-Documento:-'.$row['personas_dni'].'-Fecha Nac:-'.$row['personas_fec_nac'].'</option>';
}
?>
</select>
  <input type="text" name="textfield3">
</p>
<p align="center">
  <input type="submit" name="Submit" value="Enviar">
</p>
</form>
</body>
</html>
