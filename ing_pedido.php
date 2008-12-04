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
	height:auto;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:relative;
	width:479px;
	height:auto;
	z-index:1;
	left: 160px;
	top: 54px;
	
}

#Layer4 {
	position:absolute;
	width:265px;
	height:40px;
	z-index:2;
	left: 217px;
	top: 10px;
}

.Estilo1 {color: #FFFFFF}
-->
  </style>
      <script>
function valida(formulario){
<?

for($i=0;$i<21;$i++){
echo"	er=/^[0-9]+$/;";
echo"if(er.test(formulario.cod_pro$i.value)==false){";
$fila=$i+1;
echo"alert(\"El campo codigo Producto de la fila $fila debe rellenarse con caracteres numéricos\");";
echo"return false;";
echo"}";
echo"	er=/^[0-9]+$/;";
echo"	if(er.test(formulario.cant_prod$i.value)==false){";
echo"		alert(\"El campo Cantidad de la fila $fila debe rellenarse con caracteres numéricos\");";
echo"		return false; ";
echo"	}";

}
echo"	return true; ";
?>
	
}
</script>
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <?
  include ("connect.php");
  $cod_pro=$_POST['edad'];
  $num_items=$_POST['num'];
  $descr_pro=$_POST['descr_pro'];
   
  $mes=$_POST['mes'];
  $dia=$_POST['dia'];
  $ano=$_POST['ano'];
  $fecha=$dia.$mes.$ano;
  $sql="INSERT INTO pedido VALUES ($cod_pro,'$fecha','$descr_pro',$num_items)";

$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

  ?>
  
    <div id="Layer2">
      <form  onSubmit="return valida(formulario)" name="formulario" method="post" action="ing_pedido_-1.php">
        <table width="359" border="1">
          <tr>
            <td width="145"><div align="center"><strong>C&oacute;digo del Producto </strong></div></td>
            <td width="198"><div align="center"><strong>Cantidad del Producto </strong></div></td>
          </tr>
          <?
		  for($i=0;$i<$num_items;$i++){
echo"		  <tr>	  ";
     echo"       <td><select name=\"cod_pro$i\" >";
echo"		   <option>Escoga un codigo  </option> ";
		   
                 include ("connect.php");
				$sql="Select * from Producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($result))
				{ 
					$var=odbc_result($result,"Id_prod");
			   echo"		<option> $var </option>";
               }
		  
echo"             </select></td>";
echo"            <td><label>";
echo"              <input type=\"text\" name=\"cant_prod$i\">";
echo"            </label></td>";
echo"          </tr>";
		}  

		  ?>
        </table>
		<p>
		
		  <label>
		  <input type="submit" name="enviar" value="Enviar">
		  
          </label>
          <label>
          <input type="reset" name="borrar" value="borrar">
          </label>
		  
		 <?
		 echo " <input type=\"hidden\" name=\"cod_ped\" value=\"$cod_pro\">";
		 ?>
       <? 
	   if($num_items < 7)
	   $casa= 12 - $num_items;
	   
	    if($num_items >= 7 && $num_items <= 11 )
	  	 $casa= 13 - $num_items;
	   
	   if($num_items > 11)
	   $casa=3;
	    for($i=0;$i<$casa;$i++)
	   echo" <p>&nbsp;</p>  ";
		
		?>
      </form>
	  </div>
    
    <div id="Layer4"><strong>Ingrese las Cantidades de los productos </strong></div>
    </div>
  </div>
</body>
</html>
