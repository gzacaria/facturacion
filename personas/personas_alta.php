<html>
<head>
<title>Control Alta Personas</title>
<link rel="stylesheet" href="../estilos/estilos_login.css">
</head>

<div class="body"><body>
<?php
$conexion=mysql_connect("localhost","root","") or die("Error en la conexion al servidor");
mysql_select_db("facturacion",$conexion) or die("Error en la conexion a la base de datos");
mysql_query("
INSERT INTO `personas` (
`PERSONAS_AYN`,
`PERSONAS_DNI`,
`PERSONAS_FEC_NAC`,
`PERSONAS_TELEFONO`,
`PERSONAS_SEXO`,
`PERSONAS_DOMICILIO`,
`PERSONAS_ESTADO`) 
VALUES (
'$_REQUEST[PERSONAS_AYN]',
'$_REQUEST[PERSONAS_DNI]',
'$_REQUEST[PERSONAS_FEC_NAC]',
'$_REQUEST[PERSONAS_TELEFONO]',
'$_REQUEST[PERSONAS_SEXO]',
'$_REQUEST[PERSONAS_DOMICILIO]',
'$_REQUEST[PERSONAS_ESTADO]');",$conexion) 
or die("Error de SQL");
mysql_close($conexion);
echo "Carga realizada correctamente";
print "<meta http-equiv=Refresh content=\"2 ; url=personas_reporte.php\">";
?>
</body></div>
</html>