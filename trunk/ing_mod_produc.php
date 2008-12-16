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
	width:561px;
	height:272px;
	z-index:1;
	left: 94px;
	top: 73px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
.Estilo2 {color: #004080; font-weight: bold; font-size: 18px; }
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
<div id="Layer1">
  <?
  include ("connect.php");
  $cod_pro=$_POST['cod_pro'];
  $stock_min=$_POST['stock_min'];
  $stock_max=$_POST['stock_max'];
  $precio=$_POST['precio'];
  $descr_pro=$_POST['descr_pro'];
  $nom_pro=$_POST['nom_pro'];
  $fecha=$_POST['fecha'];
  $ano=$fecha[0].$fecha[1].$fecha[2].$fecha[3];
  $mes=$fecha[5].$fecha[6];
  $dia=$fecha[8].$fecha[9];
  $fecha=$dia.$mes.$ano;
  $cant=$_POST['cant'];
 //$cant=12;

  $sql="UPDATE Producto SET Id_prod='$cod_pro', Nombre_prod='$nom_pro', descripcion='$descr_pro',  precio=$precio, stock_max= $stock_max,  stock_min= $stock_min, fecha_ing='$fecha', stock=$cant where Id_prod='$cod_pro' ";
//$sql="UPDATE Producto SET stock=$cant where Id_prod=$cod_pro";
// generamos la tabla mediante odbc_result_all(); utilizando borde 1
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
	
	if($result){
	echo" <div class=\"Estilo1\" id=\"Layer2\">";
echo"    <p>los  datos del Productos fueron actualizados  con exito en la base de datos </p>";
echo"    <p>&nbsp;</p>";
echo"    <p class=\"Estilo2\">	<a href=\"mod_produc_1.php\">[modificar otro producto]</a></p>";
echo"  </div>";
	}			
	else{
	 echo"<div class=\"Estilo1\" id=\"Layer2\">";
 echo"    <p>No se pudo actualizar  los datos del producto en la base de datos, intentelo otra ves mas adelante </p>";
 echo"    <p>&nbsp;</p>";
 echo"    <p class=\"Estilo2\">	<a href=\"mod_produc_1.php\">[Bolver a intentarlo]</a></p>";
 echo"  </div>";
	}
  ?>
</div>"
  </div>
</body>
</html>
