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
	left: 85px;
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
	left: 723px;
	top: 67px;
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


if($dia && ($dia != 'Elija Dia') && ($mes != 'Elija Mes') ){
  $fecha=$dia.$mes.$ano;
   $sql=" select ID_PEDIDO,ID_USUARIO,to_char(FECHA_PED,'dd/mm/YYYY') as FECHA_PED ,NUMERO_ITEMS,to_char(FECHA_PED,'dd') from pedido where FECHA_PED='$fecha'";
  }
  if($mes && ($mes != 'Elija Mes')  && ($dia == 'Elija Dia') ){
   $fecha=$mes.$ano;
   
   $sql=" select ID_PEDIDO,ID_USUARIO,to_char(FECHA_PED,'dd/mm/YYYY') as FECHA_PED ,NUMERO_ITEMS,to_char(FECHA_PED,'mmYYYY') from pedido where to_char(FECHA_PED,'mmYYYY')='$fecha'";
  }
  if($ano && ($mes == 'Elija Mes') && ($dia == 'Elija Dia')){
     $fecha=$ano;
   
   $sql=" select ID_PEDIDO,ID_USUARIO,to_char(FECHA_PED,'dd/mm/YYYY') as FECHA_PED ,NUMERO_ITEMS,to_char(FECHA_PED,'YYYY') from pedido where to_char(FECHA_PED,'YYYY')='$fecha'";
  }
  
 echo"<div id=\"Layer3\">";
echo"    <table width=\"585\" border=\"1\" bordercolor=\"#004080\" bgcolor=\"#F4FFFF\">";
echo"      <tr>";
echo"        <td width=\"118\"><span class=\"Estilo1\">Codigo Pedido </span></td>";
echo"        <td width=\"108\"><span class=\"Estilo1\">Rut Usuario </span></td>";
echo"        <td width=\"115\"><span class=\"Estilo1\">fecha pedido </span></td>";
echo"        <td width=\"135\"><span class=\"Estilo1\">numero de items </span></td>";
echo"        <td width=\"75\"><span class=\"Estilo1\">ver mas </span></td>";
echo"      </tr>";

				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 

				$var1=odbc_result($result,"ID_PEDIDO");
echo"      <tr>";
echo"        <td><span class=\"Estilo2\">$var1</span></td>";
$var=odbc_result($result,"ID_USUARIO");
echo"        <td><span class=\"Estilo2\">$var</span></td>";
$var=odbc_result($result,"FECHA_PED");
echo"        <td><span class=\"Estilo2\">$var</span></td>";
$var=odbc_result($result,"NUMERO_ITEMS");
echo"        <td><span class=\"Estilo2\">$var</span></td>";
echo"        <td><span class=\"Estilo4\"><a href=\"ver_pedido_1.php?cod_pro=$var1\">m&aacute;s</a></span></td>";
echo"      </tr>";
				}
echo"    </table>";
echo"  </div>";
  ?>
  
  <div id="Layer2">
    <p align="center"><span class="Estilo1"><strong>Pedidos</strong> </strong></a></span></p>
  </div>
  
  <div id="Layer4">
    <p><a href="informe_0.php"><strong>Volver</strong></a></p>
    </div>
  <div id="Layer5"><img src="imagenes/imprimir.JPG" onClick="imprimir()" width="35" height="27"></div>
  </div>
  </div>
</body>
</html>
