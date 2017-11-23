<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Editar Cliente</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="../estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1>Editar Cliente</h1>
		</div>
		<div class="register form">
			<form action="clientes_update.php" method="post">
				<?php
				$conexion = mysql_connect( "localhost", "root", "" )or die( 'Error de Sql' );
				mysql_select_db( "facturacion", $conexion )or die( 'Error en la conexion a la BD' );
				$registros = mysql_query( "select * from vista_clientes_personas where ID_CLIENTES = $_REQUEST[ID_CLIENTES];", $conexion )or die( 'Error SQL' );
				if ( $reg = mysql_fetch_array( $registros ) ) {
					?>
				<table>
					<tr>
						<td>Apellido y Nombre:</td>
						<td>
							<?php echo $reg['PERSONAS_AYN']?>
						</td>
					</tr>
					<tr>
						<td>Editar Monto de Mora:</td>
						<td><input type="text" name="CLIENTES_IMPORTE_MORA" value="<?php echo $reg['CLIENTES_IMPORTE_MORA']?>">
						</td>
					</tr>
					<tr>
						<td><input type="hidden" name="ID_CLIENTES" value="<?php echo $reg['ID_CLIENTES']?>">
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="Guardar"> </td>
					</tr>
				</table>
				<?php 
}
else {
echo 'No existen datos para esa Entidad';
}
?>

			</form>
		</div>
	</body>
</div>

</html>