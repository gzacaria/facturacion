<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Editar Entidad</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
</head>

<div class="body">

	<body>
		<div class="header">
			<h1>Editar Entidad</h1>
		</div>
		<div class="register form">
			<form action="personas_update.php" method="post" align="center">
				<?php
				$conexion = mysql_connect( "localhost", "root", "" )or die( 'Error de Sql' );
				mysql_select_db( "facturacion", $conexion )or die( 'Error en la conexion a la BD' );
				$registros = mysql_query( "select * from personas where ID_PERSONAS = $_REQUEST[ID_PERSONAS];", $conexion )or die( 'Error SQL' );
				if ( $reg = mysql_fetch_array( $registros ) ) {
					?>
				<table>
					<tr>
						<td>Editar Apellido y Nombre:</td>
						<td><input type="text" name="PERSONAS_AYN" value="<?php echo $reg['PERSONAS_AYN']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Documento:</td>
						<td><input type="text" name="PERSONAS_DNI" value="<?php echo $reg['PERSONAS_DNI']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Fecha de Nacimiento:</td>
						<td><input type="date" name="PERSONAS_FEC_NAC" value="<?php echo $reg['PERSONAS_FEC_NAC']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Nº de Tel&eacute;fono:</td>
						<td><input type="text" name="PERSONAS_TELEFONO" value="<?php echo $reg['PERSONAS_TELEFONO']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Sexo:</td>
						<td>
							<select name="PERSONAS_SEXO">
								<option value="M" <?php if($reg[ 'PERSONAS_SEXO']=='M' ) { ?> selected="selected"
									<?php } ?>>Masculino</option>
								<option value="F" <?php if($reg[ 'PERSONAS_SEXO']=='F' ) { ?> selected="selected"
									<?php } ?>>Femenino</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Editar Domicilio:</td>
						<td><input type="text" name="PERSONAS_DOMICILIO" value="<?php echo $reg['PERSONAS_DOMICILIO']?>">
						</td>
					</tr>
					<tr>
						<td>Editar Estado:</td>
						<td>
							<select name="PERSONAS_ESTADO">
								<option value="Alta" <?php if($reg[ 'PERSONAS_ESTADO']=='Alta' ) { ?> selected="selected"
									<?php } ?> >Alta</option>
								<option value="Fallecido" <?php if($reg[ 'PERSONAS_ESTADO']=='Fallecido' ) { ?> selected="selected"
									<?php } ?> >Fallecido</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><input type="hidden" name="ID_PERSONAS" value="<?php echo $reg['ID_PERSONAS']?>">
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