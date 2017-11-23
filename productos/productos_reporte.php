<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_reporte.css">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Reporte de Productos</title>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1 align="center">Reporte de Productos</h1>
		</div>
		<?php
		$conexion = mysql_connect( "localhost", "root", "" )or die;
		mysql_select_db( "facturacion", $conexion )or die;
		$sql = "SELECT * FROM productos";
		$registros = mysql_query( $sql, $conexion )or die();
		echo '<div class="datagrid">';
		echo '<table align="center">';
		echo '<thead>';
		echo '<tr><th>Descripci&oacute;n</th>
	  <th>Precio Unitario</th>
	  <th>Stock</th>
	  <th>Observaciones</th>
	  <th></th>
	  <th></th></tr>';
		echo '</thead>';
		while ( $row = mysql_fetch_array( $registros ) ) {
			echo '<tbody>';
			echo '<tr>';
			echo '<td>';
			echo $row[ 'PRODUCTOS_DESCRIPCION' ];
			echo '</td>';

			echo '<td>';
			echo $row[ 'PRODUCTOS_PU' ];
			echo '</td>';

			echo '<td>';
			echo $row[ 'PRODUCTOS_STOCK' ];
			echo '</td>';

			echo '<td>';
			echo $row[ 'PRODUCTOS_OBS' ];
			echo '</td>';

			echo '<td>';
			echo '<a href = "productos_editar.php?ID_PRODUCTOS=' . $row[ 'ID_PRODUCTOS' ] . '"><img src="../imagenes/actualizar.png" width="20" height="23" align="middle"></a>';
			echo '</td>';
			echo '<td>';
			echo '<a href = "productos_borrar.php?ID_PRODUCTOS=' . $row[ 'ID_PRODUCTOS' ] . '"><img src="../imagenes/borrar.png" width="20" height="23" align="middle"></a>';
			echo '</td>';

			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
		?>
		<br>
		<div class="links"><a href="proveedores_formulario.php">Nuevo Proveedor</a>
		</div>
	</body>
</div>

</html>