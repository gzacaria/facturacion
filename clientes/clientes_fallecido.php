<html>

<head>
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<title>Control Fallecido</title>
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<?php
		$conexion = mysql_connect( "localhost", "root", "" )or die( 'Error de SQL' );
		mysql_select_db( "facturacion", $conexion )or die( 'Error en la Conexion a la BD' );
		mysql_query( "
UPDATE `clientes` SET `CLIENTES_ESTADO`='B' WHERE `ID_CLIENTES` = {$_REQUEST['ID_CLIENTES']};", $conexion )or die( 'Error SQL' );
		echo 'Registro Actualizado Correctamente';
		print "<meta http-equiv=Refresh content=\"2 ; url=clientes_reporte.php\">";
		?>
	</body>
</div>

</html>