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
	width:528px;
	height:276px;
	z-index:1;
	left: 72px;
	top: 68px;
}

#Layer3 {
	position:absolute;
	width:535px;
	height:140px;
	z-index:1;
	left: 87px;
	top: 270px;
}
.Estilo1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
.Estilo2 {color: #004080}
.Estilo3 {color: #FF0000; font-weight: bold; font-size: 18px; }

-->
  </style></head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	  <div id="Layer1">

  <?
   include ("connect.php");
  $cod_pro=$_POST['cod_pro'];
  $cant=$_POST['cant'];     
  
  	$sql="Select stock from Producto where Id_prod ='$cod_pro' ";
				$resulta=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($resulta))				 
					$var1=odbc_result($resulta,"stock");
			              
			 if ($var1-$cant<0){
			 
			echo" <div class=\"Estilo1\" id=\"Layer2\">";
			echo"    <p>El Producto NO PUEDE ser  despacho, ya que no hay sufuciente Stock </p>";
			echo"    <p>&nbsp;</p>";
			echo"    <p class=\"Estilo2\">	<a href=\"des_produc_1.php\">[despachar otro producto]</a></p>";
			echo"  </div>";
			 }
			 else{
  
  
	$sql="UPDATE Producto SET stock=(stock - $cant ) where Id_prod ='$cod_pro'";
	$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
  	if($result){
  	echo" <div class=\"Estilo1\" id=\"Layer2\">";
echo"    <p>El Producto fue despacho  con exito  </p>";
echo"    <p>&nbsp;</p>";
echo"    <p class=\"Estilo2\">	<a href=\"des_produc_1.php\">[despachar otro producto]</a></p>";
echo"  </div>";
	}			
	else{
	 echo"<div class=\"Estilo1\" id=\"Layer2\">";
 echo"    <p>Error, intentelo otra ves mas adelante </p>";
 echo"    <p>&nbsp;</p>";
 echo"    <p class=\"Estilo2\">	<a href=\"des_produc_1.php\">[Bolver a intentarlo]</a></p>";
 echo"  </div>";
	}
	
		$sql="Select * from Producto where Id_prod ='$cod_pro' ";
				$resulta=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($resulta))
				{ 
					$var1=odbc_result($resulta,"stock");
    				$var2=odbc_result($resulta,"stock_min");
			  
               }
			 if ($var1<$var2){
			 echo"<div class=\"Estilo3\" id=\"Layer3\">NOTA :<span class=\"Estilo3\"> Este producto se encuentra en stock critico,debe tener presente esto en  futuros pedidos </span></div>";
			 }
}	
  ?>
  </div>
  </div>
</body>
</html>
