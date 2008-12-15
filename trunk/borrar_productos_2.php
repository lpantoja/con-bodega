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
	width:438px;
	height:235px;
	z-index:1;
	left: 161px;
	top: 75px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
.Estilo2 {color: #004080}
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  <?
  $cod_pro=$_GET['cod_pro'];
  $nom_pro=$_GET['nom_pro'];
   include ("connect.php");
				$sql="delete from Producto where Id_prod =$cod_pro";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
  	if($result){
  	echo" <div class=\"Estilo1\" id=\"Layer2\">";
echo"    <p>El Producto fue eliminado  con exito de la base de datos </p>";
echo"    <p>&nbsp;</p>";
echo"    <p class=\"Estilo2\">	<a href=\"borrar_productos.php\">[borrar otro producto]</a></p>";
echo"  </div>";
	}			
	else{
	 echo"<div class=\"Estilo1\" id=\"Layer2\">";
 echo"    <p>Error, intentelo otra ves mas adelante </p>";
 echo"    <p>&nbsp;</p>";
 echo"    <p class=\"Estilo2\">	<a href=\"borrar_productos.php\">[Bolver a intentarlo]</a></p>";
 echo"  </div>";
	}
  ?>
  
  </div>
  </div>
</body>
</html>
