<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
  <head>
    <title>index2 0 200 -16 128</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="author" content="" />
    <meta name="generator" content="SWiSHmax http://www.swishzone.com" />
    <meta name="description" content="index2" />
    <meta name="keywords" content="11, 221630, 236985, 873, aluminios, contactenos, cristales, cuando, en, fono, galeria, home, nosotros, oriente, pensaras, pienses, productos, pvc, talca, tecnalum, ventanas, website" />
    <!-- text used in the movie -->
    <!-- 11, 221630, 236985, 873, aluminios, contactenos, cristales, cuando, en, fono, -->
    <!-- galeria, home, nosotros, oriente, pensaras, pienses, productos, pvc, talca, -->
    <!-- tecnalum, ventanas, website -->
    <!-- Creado por SWiSHmax - Flash fácil - www.swishzone.com -->
  <style type="text/css">
<!--
body {
	background-color: #00334F;
}
#Layer1 {
	position:absolute;
	width:800px;
	height:446px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:484px;
	height:177px;
	z-index:1;
	left: 107px;
	top: 94px;
}
.Estilo1 {
	color: #000000;
	font-size: 18px;
}
.Estilo2 {color: #004080}
-->
  </style>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  <?
    include ("connect.php");

 $cod_pro0=$_POST['cod_pro0'];
$cant_prod0=$_POST['cant_prod0'];
$cod_pro1=$_POST['cod_pro1'];
$cant_prod1=$_POST['cant_prod1'];
$cod_pro2=$_POST['cod_pro2'];
$cant_prod2=$_POST['cant_prod2'];
$cod_pro3=$_POST['cod_pro3'];
$cant_prod3=$_POST['cant_prod3'];
$cod_pro4=$_POST['cod_pro4'];
$cant_prod4=$_POST['cant_prod4'];
$cod_pro5=$_POST['cod_pro5'];
$cant_prod5=$_POST['cant_prod5'];
$cod_pro6=$_POST['cod_pro6'];
$cant_prod6=$_POST['cant_prod6'];
$cod_pro7=$_POST['cod_pro7'];
$cant_prod7=$_POST['cant_prod7'];
$cod_pro8=$_POST['cod_pro8'];
$cant_prod8=$_POST['cant_prod8'];
$cod_pro9=$_POST['cod_pro9'];
$cant_prod9=$_POST['cant_prod9'];
$cod_pro10=$_POST['cod_pro10'];
$cant_prod10=$_POST['cant_prod10'];
$cod_pro11=$_POST['cod_pro11'];
$cant_prod11=$_POST['cant_prod11'];
$cod_pro12=$_POST['cod_pro12'];
$cant_prod12=$_POST['cant_prod12'];
$cod_pro13=$_POST['cod_pro13'];
$cant_prod13=$_POST['cant_prod13'];
$cod_pro14=$_POST['cod_pro14'];
$cant_prod14=$_POST['cant_prod14'];
$cod_pro15=$_POST['cod_pro15'];
$cant_prod15=$_POST['cant_prod15'];
$cod_pro16=$_POST['cod_pro16'];
$cant_prod16=$_POST['cant_prod16'];
$cod_pro17=$_POST['cod_pro17'];
$cant_prod17=$_POST['cant_prod17'];
$cod_pro18=$_POST['cod_pro18'];
$cant_prod18=$_POST['cant_prod18'];
$cod_pro19=$_POST['cod_pro19'];
$cant_prod19=$_POST['cant_prod19'];
$cod_pro20=$_POST['cod_pro20'];
$cant_prod20=$_POST['cant_prod20']; 
$pedido = $_POST['cod_ped'];
$usuario=$_SESSION["login"];

	
if($cant_prod0){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro0,$pedido, $cant_prod0)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod1){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro1,$pedido, $cant_prod1)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod2){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro2,$pedido, $cant_prod2)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod3){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro3,$pedido, $cant_prod3)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod4){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro4,$pedido, $cant_prod4)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod5){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro5,$pedido, $cant_prod5)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod6){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro6,$pedido, $cant_prod6)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod7){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro7,$pedido, $cant_prod7)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro,$pedido, $cant_prod)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod8){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro8,$pedido, $cant_prod8)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod9){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro9,$pedido, $cant_prod9)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod10){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro10,$pedido, $cant_prod10)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod11){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro11,$pedido, $cant_prod11)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod12){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro12,$pedido, $cant_prod12)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod13){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro13,$pedido, $cant_prod13)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod14){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro14,$pedido, $cant_prod14)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod15){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro15,$pedido, $cant_prod15)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod16){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro16,$pedido, $cant_prod16)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod17){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro17,$pedido, $cant_prod17)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod18){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro18,$pedido, $cant_prod18)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod19){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro19,$pedido, $cant_prod19)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod20){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro20,$pedido, $cant_prod20)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

	if($result){
	echo" <div class=\"Estilo1\" id=\"Layer2\">";
echo"    <p>los  Productos del pedido  fueron ingresado con exito en la base de datos </p>";
echo"    <p>&nbsp;</p>";
echo"    <p class=\"Estilo2\">	<a href=\"ing_pedido_1.php\">[Ingresar otro pedido]</a></p>";
echo"  </div>";
	}			
	else{
	 echo"<div class=\"Estilo1\" id=\"Layer2\">";
 echo"    <p>No se pudo ingresar los productos del pedido  a la base de datos, intentelo otra ves mas adelante </p>";
 echo"    <p>&nbsp;</p>";
 echo"    <p class=\"Estilo2\">	<a href=\"ing_pedido_1.php\">[Bolver a intentarlo]</a></p>";
 echo"  </div>";
	}
  ?>
  </div>
  </div>
</body>
</html>
