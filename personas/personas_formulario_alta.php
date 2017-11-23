<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Formulario Alta Personas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script type="text/javascript" src="../jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="../jquery.easyui.min.js"></script>
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
</head>

<div class="body">

	<body>
		<div class="header">
			<h1 align="center">M&oacute;dulo de Carga de Personas</h1>
		</div>
		<div class="register form">
			<form action="personas_alta.php" method="post">
				<table align="center">
					<tr>
						<td>Ingresar Apellido y Nombre:</td>
						<td><input type="text" name="PERSONAS_AYN" class="easyui-validatebox" required="true">
						</td>
					</tr>
					<tr>
						<td>Ingresar Documento:</td>
						<td><input type="text" name="PERSONAS_DNI" class="easyui-numberbox" required="true">
						</td>
					</tr>
					<tr>
						<td>Seleccionar Fecha de Nacimiento:</td>
						<td><input type="date" name="PERSONAS_FEC_NAC">
						</td>
					</tr>
					<tr>
						<td>Ingresar Nro. de Tel&eacute;fono:</td>
						<td><input type="text" name="PERSONAS_TELEFONO" class="easyui-numberbox" required="true">
						</td>
					</tr>
					<tr>
						<td>Ingresar Sexo:</td>
						<td>
							<select name="PERSONAS_SEXO">
								<option value="">Seleccionar...</option>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Ingresar Domicilio:</td>
						<td><input type="text" name="PERSONAS_DOMICILIO" class="easyui-numberbox" required="true">
						</td>
					</tr>

					<tr>
						<td>Estado:</td>
						<td>
							<select name="PERSONAS_ESTADO">
								<option value="">Seleccionar...</option>
								<option value="Alta">Alta</option>
								<option value="Fallecido">Fallecido</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="Enviar">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</div>

</html>