<?
	include("seguridad.php");
	?>
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
    <!-- Creado por SWiSHmax - Flash f�cil - www.swishzone.com -->
  <style type="text/css">
<!--
body {
	background-color: #00334F;
}
#Layer1 {
	position:absolute;
	width:798px;
	height:449px;
	z-index:1;
	left: 0px;
	top: -36px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 32px;
	top: 65px;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 301px;
	top: 44px;
}
#Layer4 {
	position:absolute;
	width:67px;
	height:35px;
	z-index:3;
	left: 693px;
	top: 39px;
}
#Layer5 {
	position:absolute;
	width:246px;
	height:70px;
	z-index:4;
	left: 571px;
	top: 113px;
}
.Estilo1 {
	color: #990000;
	font-weight: bold;
}
#Layer6 {
	position:absolute;
	width:266px;
	height:79px;
	z-index:5;
	left: 2px;
	top: 76px;
}
#Layer7 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:5;
	left: 295px;
	top: 260px;
}
#Layer8 {
	position:absolute;
	width:255px;
	height:33px;
	z-index:5;
	left: 542px;
	top: 413px;
}

-->
  </style></head>
  <body >
<div id="Layer2" style="position:absolute; left:679px; top:8px; width:108px; height:28px; z-index:2">
<?
echo"      <p><a href=\"sessclose.php\" target =\"_top\" ><img src=\"imagenes/salir.JPG\"> </a></p>";
?>
</div>
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  
  <?
  $persona=$_SESSION["tipo"];
if($persona==1 || $persona==3){
echo"    <div id=\"Layer2\">";
echo"      <p class=\"Estilo2\"><img src=\"imagenes/p.JPG\"></p>";
		
echo"      <p><a href=\"ing_produc_1.php\"><img src=\"imagenes/ingresaproduct.JPG\"></a></p>";
echo"      <p><a href=\"mod_produc_1.php\"><img src=\"imagenes/moproduct.JPG\"></a></p>";
echo"      <p><a href=\"ing_cant_produc_1.php\"><img src=\"imagenes/items.JPG\"></a></p>";
echo"      <p><a href=\"borrar_productos.php\"><img src=\"imagenes/borrar.JPG\"></a></p>";
echo"      <p><a href=\"des_produc_1.php\"><img src=\"imagenes/despacho.JPG\"></a> </p>";
echo"    </div>";
}
if($persona==1 || $persona==2){
echo"    <div id=\"Layer3\">";
echo"      <p class=\"Estilo2\"><img src=\"imagenes/pd.JPG\">	</p>";
echo"      <p><a href=\"ing_pedido_1.php\"><img src=\"imagenes/ipedido.JPG\"> </a></p>";
echo"      <p><a href=\"mod_pedido_0.php\"><img src=\"imagenes/mpedido.JPG\"> </a></p>";
echo"      <p><a href=\"borrar_pedidos.php\"><img src=\"imagenes/epedido.JPG\"> </a></p>";
echo"      <p><a href=\"ver_pedido_0.php\"><img src=\"imagenes/vpedido.JPG\"> </a></p>";
echo"    </div>";
}
if($persona==1 || $persona==1){
echo"	    <div id=\"Layer7\">";
echo"      <p class=\"Estilo2\"><img src=\"imagenes/us.JPG\">	</p>";
echo"      <p><a href=\"ingreso_usuario.php\"><img src=\"imagenes/cuser.JPG\"></a></p>";
echo"      <p><a href=\"mod_usuario_0.php\"><img src=\"imagenes/muser.JPG\"></a></p>";
echo"      <p><a href=\"borra_per.php\"><img src=\"imagenes/euser.JPG\"></a></p>";
echo"    </div>";
}
  ?>
    <div class="Estilo1" id="Layer5">
	<?
	  
		   include ("connect.php");
		   
				$sql="SELECT *  FROM producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
			$bann=0;
				   while (odbc_fetch_row($result))
				{ 
					$var2=odbc_result($result,"stock_min") ;
										$var1=odbc_result($result,"stock") ;
										
					if($var1<$var2)
					$bann=1;					
				}
	if($bann==1)			
		echo"<a href=\"stock_critico.php\"><img src=\"imagenes/min.JPG\"> </a>";
	
	?>
    <div class="Estilo1" id="Layer6">	<?
	  
		   include ("connect.php");
		   
				$sql="SELECT *  FROM producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
			$bann=0;
			$var2=$var1=0;
				   while (odbc_fetch_row($result))
				{ 
					$var2=odbc_result($result,"stock_max") ;
										$var1=odbc_result($result,"stock") ;
										
					if($var1 >= $var2)
					$bann=1;					
				}
		if($bann==1)
		echo"<a href=\"sobre_stock.php\"><img src=\"imagenes/max.JPG\"></a> ";

	?>
      </div>
    </div>
    <div id="Layer8"><strong>
	<?
	
  $login=$_SESSION["login"];
 $sql="select *  from usuario where id_usuario='$login' ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 
				$var1=odbc_result($result,"nombre");
				$var2=odbc_result($result,"apellidos");
echo"	Bienvenido $var1 $var2";
}
	?></strong></div>
  </div>
</body>
</html>
