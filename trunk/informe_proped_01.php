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
	height:767px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:212px;
	height:25px;
	z-index:1;
	left: 210px;
	top: 13px;
}
#Layer3 {
	position:absolute;
	width:691px;
	height:39px;
	z-index:2;
	left: 43px;
	top: 69px;
}
#Layer4 {
	position:absolute;
	width:122px;
	height:23px;
	z-index:2;
	left: 718px;
	top: 13px;
}
.Estilo1 {font-size: 18px}
.Estilo3 {font-weight: bold; color: #000000;}
#Layer5 {
	position:absolute;
	width:33px;
	height:29px;
	z-index:3;
	left: 661px;
	top: 28px;
}
-->
  </style>
         <script type="text/javascript" language="javascript">
    <!--
	function imprimir()
	{
		print();
	} // end of the 'confirmLink()' function
    
    //-->
    </script>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  <?
  include("connect.php");
    $dia=$_POST['dia'];
  $mes=$_POST['mes'];
    $ano=$_POST['ano'];
	$cod_pro=$_POST['cod_pro'];

if($dia && ($dia != 'Elija Dia') && ($mes != 'Elija Mes') ){
  $fecha=$dia.$mes.$ano;
   $sql=" select producto.id_prod, producto.nombre_prod,producto.precio , pedido.ID_PEDIDO,pedido.ID_USUARIO, to_char(pedido.FECHA_PED,'dd/mm/YYYY') as FECHA_PED , pedido_producto.cantidad,to_char(pedido.FECHA_PED,'dd') from pedido, pedido_producto, producto  where pedido.id_pedido=pedido_producto.id_pedido and producto.id_prod=pedido_producto.id_prod
and pedido.FECHA_PED='$fecha' and  producto.id_prod='$cod_pro'";
  }
  if($mes && ($mes != 'Elija Mes')  && ($dia == 'Elija Dia') ){
   $fecha=$mes.$ano;
   
   $sql=" select producto.id_prod, producto.nombre_prod ,producto.precio, pedido.ID_PEDIDO,pedido.ID_USUARIO , to_char(pedido.FECHA_PED,'dd/mm/YYYY') as FECHA_PED ,pedido_producto.cantidad,to_char(pedido.FECHA_PED,'mmYYYY') from pedido, pedido_producto, producto  where pedido.id_pedido=pedido_producto.id_pedido and producto.id_prod=pedido_producto.id_prod
 and to_char(pedido.FECHA_PED,'mmYYYY')='$fecha' and  producto.id_prod='$cod_pro'";
  }
  if($ano && ($mes == 'Elija Mes') && ($dia == 'Elija Dia')){
     $fecha=$ano;
   
   $sql=" select producto.id_prod, producto.nombre_prod,producto.precio, pedido.ID_PEDIDO,pedido.ID_USUARIO , to_char(pedido.FECHA_PED,'dd/mm/YYYY') as FECHA_PED ,pedido_producto.cantidad,to_char(pedido.FECHA_PED,'YYYY') from pedido, pedido_producto, producto  where pedido.id_pedido=pedido_producto.id_pedido and producto.id_prod=pedido_producto.id_prod
 and to_char(pedido.FECHA_PED,'YYYY')='$fecha' and  producto.id_prod='$cod_pro'";
  }
  
 echo"<div id=\"Layer3\">";
echo"<table width=\"709\" border=\"2\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#0052A4\">";
echo"  <tr>";
echo"    <th width=\"96\" height=\"27\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Codigo Producto </span></th>";
echo"    <th width=\"99\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Nombre Producto </span></th>";
echo"    <th width=\"96\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Precio Producto </span></th>";
echo"    <th width=\"105\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Codigo Pedido </span></th>";
echo"    <th width=\"104\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Rut Comprador </span></th>";
echo"    <th width=\"95\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Fecha Pedido </span></th>";
echo"    <th width=\"96\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><span class=\"Estilo5\">Cantidad pedida </span></th>";
echo"  </tr>";
//echo " $sql";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 

				$var=odbc_result($result,"ID_PROD");
	echo "<tr>";
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"NOMBRE_PROD");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"PRECIO");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"ID_PEDIDO");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"ID_USUARIO");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"FECHA_PED");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
	$var=odbc_result($result,"CANTIDAD");
    echo "<td bordercolor=\"#004080\" bgcolor=\"#F4FFFF\"><div align=\"center\"><span class=\"Estilo5\">$var</span></div></td>";
  echo " </tr>";
				}
echo"    </table>";
echo"  </div>";
  ?>
    
  <div id="Layer2">
    <p align="center"><span class="Estilo1"><strong>Pedidos</strong> </strong></a></span></p>
  </div>
  
  <div id="Layer4">
    <p><a href="informe_proped_0.php"><strong>Volver</strong></a></p>
    </div>
  <div id="Layer5"><img src="imagenes/imprimir.JPG" onClick="imprimir()" width="35" height="27"></div>
  </div>
  </div>
</body>
</html>
