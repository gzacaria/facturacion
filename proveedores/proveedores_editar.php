<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Editar Proveedor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1>Editar Proveedor</h1>
		</div>
		<div class="register form">
			<form action="proveedores_actualizar.php" method="POST">
				<?php
				$conexion = mysql_connect( "localhost", "root", "" )or die( 'Error de conexion al servidor' );
				mysql_select_db( "facturacion", $conexion )or die( 'Error de conexion a la base de datos' );
				$registros = mysql_query( "SELECT * FROM proveedores WHERE ID_PROVEEDORES= $_REQUEST[ID_PROVEEDORES];", $conexion )or die( 'error sql' );
				if ( $reg = mysql_fetch_array( $registros ) ) {
					?>
				<table align="center">
					<tr>
						<td>Editar Raz&oacute;n Social: </td>
						<td><input type="text" name="PROVEEDORES_DESCRIPCION" value="<?php echo $reg['PROVEEDORES_DESCRIPCION']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Direcci&oacute;n: </td>
						<td><input type="text" name="PROVEEDORES_DOMICILIO" value="<?php echo $reg['PROVEEDORES_DOMICILIO']?>">
						</td>
					</tr>
					<td>Editar Nº de Tel&eacute;fono: </td>
					<td><input type="text" name="PROVEEDORES_TELEFONO" value="<?php echo $reg['PROVEEDORES_TELEFONO']?>">
					</td>
					</tr>
					<td>
						<td><input type="hidden" name="ID_PROVEEDORES" value="<?php echo $reg['ID_PROVEEDORES']?>">
						</td>
						</tr>
						<tr>
							<td><input type="submit" value="Guardar Cambios">
							</td>
						</tr>
				</table>
				<?php
				} else {
					echo 'No existen datos para esa entidad';
				}
				?>
			</form>
		</div>
	</body>
</div>

</html>