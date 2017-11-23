<html>

<head>
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<title>Controlador Alta</title>
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<?php
		$conexion = mysql_connect( "localhost", "root", "" )or die( "Error en la conexion al servidor" );
		mysql_select_db( "facturacion", $conexion )or die( "Error en la conexion a la base de datos" );

		mysql_query( "
INSERT INTO `clientes`(
`RELA_PERSONAS`,
`CLIENTES_FECHA_ALTA`,
`CLIENTES_ESTADO`,
`CLIENTES_IMPORTE_MORA`) VALUES({$_REQUEST['RELA_PERSONAS']},CURDATE(),'A',0);", $conexion )or die( "Error de SQL" );
		mysql_close( $conexion );
		echo "Carga realizada correctamente";
		print "<meta http-equiv=Refresh content=\"2 ; url=clientes_reporte.php\">";
		?>
	</body>
</div>

</html>