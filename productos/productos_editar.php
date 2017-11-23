<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Editar Producto</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_reporte.css">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1>Editar Producto</h1>
		</div>
		<div class="register form">
			<form action="productos_actualizar.php" method="POST">
				<?php
				$conexion = mysql_connect( "localhost", "root", "" )or die( 'Error de conexion al servidor' );
				mysql_select_db( "facturacion", $conexion )or die( 'Error de conexion a la base de datos' );
				$registros = mysql_query( "SELECT * FROM productos WHERE ID_PRODUCTOS= $_REQUEST[ID_PRODUCTOS];", $conexion )or die( 'Error SQL' );
				if ( $reg = mysql_fetch_array( $registros ) ) {
					?>
				<table align="center">
					<tr>
						<td>Proveedor: </td>
						<td><input type="text" name="RELA_PROVEEDORES" value="<?php echo $reg['RELA_PROVEEDORES']?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Editar Descripci&oacute;n: </td>
						<td><input type="text" name="PRODUCTOS_DESCRIPCION" value="<?php echo $reg['PRODUCTOS_DESCRIPCION']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Precio Unitario: </td>
						<td><input type="text" name="PRODUCTOS_PU" value="<?php echo $reg['PRODUCTOS_PU']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Descuentos: </td>
						<td><input type="text" name="PRODUCTOS_DESCUENTOS" value="<?php echo $reg['PRODUCTOS_DESCUENTOS']?>">
						</td>
					</tr>
					<tr>
						<td>Editar IVA: </td>
						<td><input type="text" name="PRODUCTOS_IVA" value="<?php echo $reg['PRODUCTOS_IVA']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Stock: </td>
						<td><input type="text" name="PRODUCTOS_STOCK" value="<?php echo $reg['PRODUCTOS_STOCK']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Observaciones: </td>
						<td><input type="text" name="PRODUCTOS_OBS" value="<?php echo $reg['PRODUCTOS_OBS']?>">
						</td>
					</tr>
					<tr>
						<td><input type="hidden" name="ID_PRODUCTOS" value="<?php echo $reg['ID_PRODUCTOS']?>">
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