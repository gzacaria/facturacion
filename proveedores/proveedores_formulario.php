<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Nuevo Proveedor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1 align="center">Nuevo Proveedor</h1>
		</div>
		<div class="register form">
			<form action="proveedores_alta.php" method="post">
				<table align="center">
					<tr>
						<td>Raz&oacute;n Social: </td>
						<td><input type="text" name="PROVEEDORES_DESCRIPCION">
						</td>
					</tr>
					<tr>
						<td>Direcci&oacute;n: </td>
						<td><input type="text" name="PROVEEDORES_DOMICILIO">
						</td>
					</tr>
					<tr>
						<td>Nro. de Tel&eacute;fono: </td>
						<td><input type="text" name="PROVEEDORES_TELEFONO">
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="Guardar">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</div>

</html>