<?php
$conexion=mysql_connect("localhost","root","") or die("Error de Conexion");
mysql_select_db("facturacion",$conexion) or die("Error de Conexion a la BD");

$x1=$_POST["text"][0]; //cantidad 1
if($x1=="")
{
$x1=0;
}
$x2=$_POST["text"][1];
if($x2=="")
{
$x2=0;
}
$x3=$_POST["text"][2];
if($x3=="")
{
$x3=0;
}
$x4=$_POST["text"][3];
if($x4=="")
{
$x4=0;
}
$x5=$_POST["text"][4];
if($x5=="")
{
$x5=0;
}
$x6=$_POST["text"][5];
if($x6=="")
{
$x6=0;
}
$x7=$_POST["text"][6];
if($x7=="")
{
$x7=0;
}
$x8=$_POST["text"][7];
if($x8=="")
{
$x8=0;
}
$x9=$_POST["text"][8];
if($x9=="")
{
$x9=0;
}
$x10=$_POST["text"][9];
if($x10=="")
{
$x10=0;
}

$y1=$_POST["producto"][0];
$y2=$_POST["producto"][1];
$y3=$_POST["producto"][2];
$y4=$_POST["producto"][3];
$y5=$_POST["producto"][4];
$y6=$_POST["producto"][5];
$y7=$_POST["producto"][6];
$y8=$_POST["producto"][7];
$y9=$_POST["producto"][8];
$y10=$_POST["producto"][9];

$FACTURAS_TIPO=$_POST["FACTURAS_TIPO"];

$precio1=$x1 * $y1;
$precio2=$x2 * $y2;
$precio3=$x3 * $y3;
$precio4=$x4 * $y4;
$precio5=$x5 * $y5;
$precio6=$x6 * $y6;
$precio7=$x7 * $y7;
$precio8=$x8 * $y8;
$precio9=$x9 * $y9;
$precio10=$x10 * $y10;
/*---------------------------------------------ultimo id de factura------------------------------------------*/

$MAX_ID="SELECT MAX(`ID_FACTURAS`) AS ultima_factura FROM `facturas`;";
$query=mysql_query($MAX_ID,$conexion) or die("Error de Select MAX");
while($row=mysql_fetch_array($query))
    {
        $id_factura=$row['ultima_factura']+1;
    }
/*--------------------------------------------------detalle--------------------------------------------------*/

$sql="INSERT INTO `detalles` 
(`RELA_FACTURAS`,`RELA_PRODUCTOS`,`DETALLE_CANTIDAD`,`DETALLE_IMPORTE`)
VALUES 
($id_factura,1,$x1,$precio1),
($id_factura,2,$x2,$precio2),
($id_factura,3,$x3,$precio3),
($id_factura,4,$x4,$precio4),
($id_factura,5,$x5,$precio5),
($id_factura,6,$x6,$precio6),
($id_factura,7,$x7,$precio7),
($id_factura,8,$x8,$precio8),
($id_factura,9,$x9,$precio9),
($id_factura,10,$x10,$precio10);";
mysql_query($sql,$conexion) or die("Error de SQL");


/*--------------------------------------------------cabecera--------------------------------------------------*/

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;
$sql_factura="INSERT INTO `facturas` VALUES($id_factura,1,CURDATE(),'$FACTURAS_TIPO',$total);";
mysql_query($sql_factura,$conexion) or die("Error de SQL");
echo "Factura generada correctamente";

?>