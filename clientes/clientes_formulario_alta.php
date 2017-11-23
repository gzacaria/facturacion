<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>M&oacute;dulo de Carga de Clientes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1 align="center">M&oacute;dulo de Carga de Clientes</h1>
<form action="alta_clientes.php" method="post">
<table>
<td>Seleccionar persona</td>
<td>
<select name="RELA_PERSONAS">
<option value="">Seleccionar...</option>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error de conexion");
mysql_select_db("facturacion",$conexion) or die("Error en la conexion a la base de datos");
$buscar=mysql_query("
SELECT*FROM `personas` WHERE `PERSONAS_ESTADO` LIKE '%Alta%';
",$conexion) or die("Error de SQL");
while($row=mysql_fetch_array($buscar)){
echo '<option value="'.$row['ID_PERSONAS'].'">'.$row['PERSONAS_AYN'].'-Documento:-'.$row['PERSONAS_DNI'].'-Fecha Nac:-'.$row['PERSONAS_FEC_NAC'].'</option>';
}
?>
</select>
</td>
</tr>
<tr><td><input type="submit" value="Enviar"></td></tr>
</table>
</form>
</body>
</html>
