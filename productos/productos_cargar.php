<html>
<head>
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos.css">
<title>Añadir Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
incremento =0;
function crear(obj) {
  incremento++;
  if(incremento < 6){
 
  field = document.getElementById('field');
 contenedor = document.createElement('div');
  contenedor.id = 'div'+incremento;
  field.appendChild(contenedor);
 
 
  campo_texto = document.createElement('input');
  campo_texto.type = 'text';
  campo_texto.name = 'PRODUCTOS_DESCRIPCION'+'[ ]';
  campo_texto.placeholder = 'Ingresar Descripcion';
  contenedor.appendChild(campo_texto);
  
  campo_texto1 = document.createElement('input');
  campo_texto1.type = 'text';
  campo_texto1.name = 'PRODUCTOS_DESCUENTOS'+'[ ]';
  campo_texto1.placeholder = 'Ingresar Descuentos';
  contenedor.appendChild(campo_texto1);
  
  campo_texto2 = document.createElement('input');
  campo_texto2.type = 'text';
  campo_texto2.name = 'PRODUCTOS_PU'+'[ ]';
  campo_texto2.placeholder = 'Ingresar Precio Unitario';
  contenedor.appendChild(campo_texto2);
  
  campo_texto3 = document.createElement('input');
  campo_texto3.type = 'text';
  campo_texto3.name = 'PRODUCTOS_STOCK'+'[ ]';
  campo_texto3.placeholder = 'Ingresar Stock Inicial';
  contenedor.appendChild(campo_texto3);
  
  campo_texto4 = document.createElement('input');
  campo_texto4.type = 'text';
  campo_texto4.name = 'PRODUCTOS_OBS'+'[ ]';
  campo_texto4.placeholder = 'Ingresar Observaciones';
  contenedor.appendChild(campo_texto4);
  
  
  combo_proveedores = document.createElement('select');
  combo_proveedores.type = 'text';
  combo_proveedores.name = 'RELA_PROVEEDORES'+'[ ]';

// Creamos un objeto option
var miOption=document.createElement("option");
// Añadimos las propiedades value y label
miOption.setAttribute("value","0");
//miOption.setAttribute("label","casa");
miOption.innerHTML="Seleccionar Proveedor...";
// Dejamos seleccionado este valor por defecto
miOption.setAttribute("selected","true");  
// Añadimos el option al select
combo_proveedores.appendChild(miOption);
 
var miOption1=document.createElement("option");
miOption1.setAttribute("value","1");
miOption1.innerHTML="Proveedor 1"; 
combo_proveedores.appendChild(miOption1);
 
var miOption2=document.createElement("option");
miOption2.setAttribute("value","2");
miOption2.innerHTML="Proveedor 2"; 
//miOption2.setAttribute("selected","true");
combo_proveedores.appendChild(miOption2);

var miOption3=document.createElement("option");
miOption3.setAttribute("value","3");
miOption3.innerHTML="Proveedor 3"; 
//miOption3.setAttribute("selected","true");
combo_proveedores.appendChild(miOption3);

var miOption4=document.createElement("option");
miOption4.setAttribute("value","4");
miOption4.innerHTML="Proveedor 4"; 
//miOption3.setAttribute("selected","true");
combo_proveedores.appendChild(miOption4);

var miOption5=document.createElement("option");
miOption5.setAttribute("value","5");
miOption5.innerHTML="Proveedor 5"; 
//miOption3.setAttribute("selected","true");
combo_proveedores.appendChild(miOption5);

contenedor.appendChild(combo_proveedores);
} else{
alert("Registro Maximo 5 Productos");
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

<body>
<h1 align="center">M&oacute;dulo Nuevo Producto </h1>
<form name="form1" method="POST" action="productos_grabar.php">
<fieldset id="field">
<input type="button" value="A&ntilde;adir" onclick="crear(this)">
<input name="save" type="submit" value="Grabar" onclick="enviar(this)">
</fieldset>
</form>
</body>
</html>