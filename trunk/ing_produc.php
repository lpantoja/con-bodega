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
	position:relative;
	width:800px;
	height:446px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:fixed;
	width:800px;
	height:400px;
	z-index:1;
	left: 112px;
	top: 77px;
}
-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	

  <?
  include ("connect.php");
  $cod_pro=$_POST['edad'];
  $stock_min=$_POST['stock_min'];
  $stock_max=$_POST['stock_max'];
  $precio=$_POST['precio'];
  $descr_pro=$_POST['descr_pro'];
  $nom_pro=$_POST['nom_pro'];
    $mes=$_POST['mes'];
  $dia=$_POST['dia'];
  $ano=$_POST['ano'];
  $fecha=$dia.$mes.$ano;

   $cant=0;       
  // $cant=$_POST['cant'];


  $sql="INSERT INTO Producto VALUES ($cod_pro,'$nom_pro', '$descr_pro', $precio, $stock_max, $stock_min, '$fecha', $cant  )";
   echo " <div id=\"Layer1\">";
    echo "<div id=\"Layer2\">$sql  $sss </div>";
  echo "</div>";
// generamos la tabla mediante odbc_result_all(); utilizando borde 1
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

  ?>
  </div>
</body>
</html>
