<html>

<head>
	<title>M&oacute;dulo Crear Facturas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<link rel="stylesheet" href="../estilos/estilos_login.css">
	<div id="menu"><?php include '../menu.php'; ?></div>
	<script type="text/javascript">
		icremento = 0;

		function crear( obj ) {
			icremento++;
			if ( icremento < 11 ) {

				field = document.getElementById( 'field' );
				contenedor = document.createElement( 'div' );
				contenedor.id = 'div' + icremento;
				field.appendChild( contenedor );

				boton = document.createElement( 'input' );
				boton.type = 'text';
				boton.name = 'text' + '[ ]';
				boton.placeholder = 'Ingresar Cantidad';
				contenedor.appendChild( boton );
				lista = document.createElement( 'select' );
				lista.type = 'text';
				lista.name = 'producto' + '[ ]';



				// Creamos un objeto option
				var miOption = document.createElement( "option" );
				// Añadimos las propiedades value y label
				miOption.setAttribute( "value", "85" );
				//miOption.setAttribute("label","casa");
				miOption.innerHTML = "Producto 1";
				// Dejamos seleccionado este valor por defecto
				miOption.setAttribute( "selected", "true" );
				// Añadimos el option al select
				lista.appendChild( miOption );


				var miOption2 = document.createElement( "option" );
				miOption2.setAttribute( "value", "50" );
				miOption2.innerHTML = "Producto 2";
				//miOption2.setAttribute("selected","true");
				lista.appendChild( miOption2 );

				var miOption3 = document.createElement( "option" );
				miOption3.setAttribute( "value", "65" );
				miOption3.innerHTML = "Producto 3";
				//miOption3.setAttribute("selected","true");
				lista.appendChild( miOption3 );

				var miOption4 = document.createElement( "option" );
				miOption4.setAttribute( "value", "100" );
				miOption4.innerHTML = "Producto 4";
				//miOption4.setAttribute("selected","true");
				lista.appendChild( miOption4 );

				var miOption5 = document.createElement( "option" );
				miOption5.setAttribute( "value", "30" );
				miOption5.innerHTML = "Producto 5";
				//miOption5.setAttribute("selected","true");
				lista.appendChild( miOption5 );

				var miOption6 = document.createElement( "option" );
				miOption6.setAttribute( "value", "255" );
				miOption6.innerHTML = "Producto 6";
				//miOption6.setAttribute("selected","true");
				lista.appendChild( miOption6 );

				var miOption7 = document.createElement( "option" );
				miOption7.setAttribute( "value", "125" );
				miOption7.innerHTML = "Producto 7";
				//miOption7.setAttribute("selected","true");
				lista.appendChild( miOption7 );

				var miOption8 = document.createElement( "option" );
				miOption8.setAttribute( "value", "70" );
				miOption8.innerHTML = "Producto 8";
				//miOption8.setAttribute("selected","true");
				lista.appendChild( miOption8 );

				var miOption9 = document.createElement( "option" );
				miOption9.setAttribute( "value", "15" );
				miOption9.innerHTML = "Producto 9";
				//miOption9.setAttribute("selected","true");
				lista.appendChild( miOption9 );

				var miOption10 = document.createElement( "option" );
				miOption10.setAttribute( "value", "500" );
				miOption10.innerHTML = "Producto 10";
				//miOption10.setAttribute("selected","true");
				lista.appendChild( miOption10 );



				contenedor.appendChild( lista );

			} else {
				alert( "Registro Maximo 10 Productos" );
			}
		}
		/*
		function borrar(obj) {
		  field = document.getElementById('field');
		  field.removeChild(document.getElementById(obj));
		}
		*/
	</script>
</head>

<div class="body">

	<body>
		<div class="header">
			<h1 align="center">M&oacute;dulo de Facturaci&oacute;n</h1>
		</div>

		<div class="register form">
			<form name="form1" method="POST" action="facturas_alta.php">
				<table>
					<tr>
						<td>Seleccionar Tipo de Factura:</td>
						<td>
							<select name="FACTURAS_TIPO">
								<option value="">Seleccionar...</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Seleccionar Cliente:</td>
						<td>
							<select name="RELA_CLIENTES">
								<option value="">Seleccionar...</option>
								<?php
								$conexion = mysql_connect( "localhost", "root", "" )or die( "Error de conexion" );
								mysql_select_db( "facturacion", $conexion )or die( "Error en la conexion a la base de datos" );
								$buscar = mysql_query( "SELECT * FROM vista_clientes_personas 
                     WHERE PERSONAS_ESTADO NOT LIKE '%Fallecido%' AND CLIENTES_ESTADO NOT LIKE '%Baja%';", $conexion )or die( "Error de SQL" );
								while ( $row = mysql_fetch_array( $buscar ) ) {
									echo '<option value="' . $row[ 'ID_CLIENTES' ] . '">' . $row[ 'PERSONAS_AYN' ] . ' -Documento: ' . $row[ 'PERSONAS_DNI' ] . '</option>';
								}
								?>
							</select>
						</td>
					</tr>
				</table>
				<fieldset id="field">
					<input type="button" value="A&ntilde;adir" onclick="crear(this)">
					<input name="save" type="submit" value="Grabar" onclick="enviar(this)">
				</fieldset>
			</form>
		</div>
	</body>
</div>

</html>