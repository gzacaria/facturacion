<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Control M&oacute;dulo Eliminaci&oacute;n Personas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos/estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
</head>

	<div class="body">

		<body>
			<?php
			$conexion = mysql_connect( "localhost", "root", "" )or die( "Error de Conexion" );
			mysql_select_db( "facturacion", $conexion )or die( "Error de Conexion a la BD" );

			$proveedor_1 = $_POST[ "RELA_PROVEEDORES" ][ 0 ];
			$proveedor_2 = $_POST[ "RELA_PROVEEDORES" ][ 1 ];
			$proveedor_3 = $_POST[ "RELA_PROVEEDORES" ][ 2 ];
			$proveedor_4 = $_POST[ "RELA_PROVEEDORES" ][ 3 ];
			$proveedor_5 = $_POST[ "RELA_PROVEEDORES" ][ 4 ];

			$descripcion_1 = $_POST[ "PRODUCTOS_DESCRIPCION" ][ 0 ];
			$descripcion_2 = $_POST[ "PRODUCTOS_DESCRIPCION" ][ 1 ];
			$descripcion_3 = $_POST[ "PRODUCTOS_DESCRIPCION" ][ 2 ];
			$descripcion_4 = $_POST[ "PRODUCTOS_DESCRIPCION" ][ 3 ];
			$descripcion_5 = $_POST[ "PRODUCTOS_DESCRIPCION" ][ 4 ];

			$descuentos_1 = $_POST[ "PRODUCTOS_DESCUENTOS" ][ 0 ];
			$descuentos_2 = $_POST[ "PRODUCTOS_DESCUENTOS" ][ 1 ];
			$descuentos_3 = $_POST[ "PRODUCTOS_DESCUENTOS" ][ 2 ];
			$descuentos_4 = $_POST[ "PRODUCTOS_DESCUENTOS" ][ 3 ];
			$descuentos_5 = $_POST[ "PRODUCTOS_DESCUENTOS" ][ 4 ];

			$pu_1 = $_POST[ "PRODUCTOS_PU" ][ 0 ];
			$pu_2 = $_POST[ "PRODUCTOS_PU" ][ 1 ];
			$pu_3 = $_POST[ "PRODUCTOS_PU" ][ 2 ];
			$pu_4 = $_POST[ "PRODUCTOS_PU" ][ 3 ];
			$pu_5 = $_POST[ "PRODUCTOS_PU" ][ 4 ];

			$stock_1 = $_POST[ "PRODUCTOS_STOCK" ][ 0 ];
			$stock_2 = $_POST[ "PRODUCTOS_STOCK" ][ 1 ];
			$stock_3 = $_POST[ "PRODUCTOS_STOCK" ][ 2 ];
			$stock_4 = $_POST[ "PRODUCTOS_STOCK" ][ 3 ];
			$stock_5 = $_POST[ "PRODUCTOS_STOCK" ][ 4 ];

			$obs_1 = $_POST[ "PRODUCTOS_OBS" ][ 0 ];
			$obs_2 = $_POST[ "PRODUCTOS_OBS" ][ 1 ];
			$obs_3 = $_POST[ "PRODUCTOS_OBS" ][ 2 ];
			$obs_4 = $_POST[ "PRODUCTOS_OBS" ][ 3 ];
			$obs_5 = $_POST[ "PRODUCTOS_OBS" ][ 4 ];

			$sql = "INSERT INTO `productos`(
`RELA_PROVEEDORES`,
`PRODUCTOS_IVA`,
`PRODUCTOS_DESCUENTOS`,
`PRODUCTOS_DESCRIPCION`,
`PRODUCTOS_PU`,
`PRODUCTOS_STOCK`,
`PRODUCTOS_OBS`) VALUES
($proveedor_1,21,$descuentos_1,'$descripcion_1',$pu_1,$stock_1,'$obs_1'),
($proveedor_2,21,$descuentos_2,'$descripcion_2',$pu_2,$stock_2,'$obs_2'),
($proveedor_3,21,$descuentos_3,'$descripcion_3',$pu_3,$stock_3,'$obs_3'),
($proveedor_4,21,$descuentos_4,'$descripcion_4',$pu_4,$stock_4,'$obs_4'),
($proveedor_5,21,$descuentos_5,'$descripcion_5',$pu_5,$stock_5,'$obs_5');";
			mysql_query( $sql, $conexion )or die( "Error de SQL" );
			echo "Productos cargados correctamente";
			print "<meta http-equiv=Refresh content=\"2 ; url=productos_reporte.php\">"
			?>
		</body>
	</div>

</html>