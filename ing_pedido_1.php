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
	width:800px;
	height:446px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:239px;
	height:30px;
	z-index:1;
	left: 289px;
	top: 32px;
}
.Estilo1 {
	font-size: 18px;
	font-weight: bold;
}
#Layer3 {
	position:absolute;
	width:503px;
	height:295px;
	z-index:2;
	left: 175px;
	top: 95px;
}
.Estilo2 {
	color: #004080;
	font-weight: bold;
}
-->
  </style>
  
<script>
function valida(formulario){

	er=/^[a-zA-Z0-9]+$/;
	if((formulario.cod_ped.value)==false){
		alert("El campo codigo pedido debe rellenarse con caracteres alfanum�ricos simples");
		return false; // NO se enviar� el formulario.
	}

	if((formulario.descr_pro.value)==false){
		alert("El campo Descripcion debe rellenarse con caracteres alfab�ticos");
		return false; // NO se enviar� el formulario.
	}

	
		 <?
		  
		        include ("connect.php");
				 $sql="select count(*) as total from producto";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($result))
				{ 
					$var=odbc_result($result,"Total");
					echo"if(formulario.num.value > $var )";
					
				}
		 
          ?> 
		  {
		  alert("El campo Numero de Items debe rellenarse con caracter numerico menor que <? echo "$var"; ?>");
	    	return false; // NO se enviar� el formulario.
		  }
		  
		 er=/^[0-9]+$/;
	if(er.test(formulario.num.value)==false ){

		alert("El campo Numero de Items debe rellenarse  con caracter numerico");
		return false; // NO se enviar� el formulario.
	}
	
		if((formulario.usuario.value)==false ){

		alert("El campo usuario de Items debe rellenarse ");
		return false; // NO se enviar� el formulario.
	}
	
	er=/^[0-9]+$/;
	if(er.test(formulario.dia.value)==false){
		alert("El campo Dia debe rellenarse con el dia");
		return false; // NO se enviar� el formulario.
	}

	er=/^[0-9]+$/;
	if(er.test(formulario.mes.value)==false){
		alert("El campo Mes debe rellenarse con el mes");
		return false; // NO se enviar� el formulario.
	}
	
	er=/^[0-9]+$/;
	if(er.test(formulario.ano.value)==false){
		alert("El campo a�o rellenarse con el a�o");
		return false; // NO se enviar� el formulario.
	}



	return true; // Se enviar� el formulario.
}
</script>
  </head>
<body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo1" id="Layer2">Ingreso Datos Pedido </div>
    <div id="Layer3">
      <form  onSubmit="return valida(formulario)"  name="formulario" method="post" action="ing_pedido.php">
        <table width="481" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
          <tr>
            <td width="150" bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">C&oacute;digo Pedido </div></td>
            <td width="311" bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="cod_ped"></td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Descrici&oacute;n</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><textarea name="descr_pro"></textarea> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">numero de items</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="num"> <strong>
           <?
		     include ("connect.php");
			   $sql="select count(*) as total from producto";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec")); 
				
				 while (odbc_fetch_row($result))
				{ 
					$var=odbc_result($result,"total");
			   echo"Menor o igual que $var ";
               }
		   ?>  </strong></td>
          </tr>
		      <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Rut usuario</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="usuario"> 
            (ejem 16275643-5)<strong>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Fecha de Pedido </div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF">
			<select name="dia" > 

			<option selected>Elija Dia</option>
			<? 
			for($i=1;$i<32;$i++){
				if($i<10)
				echo " <option>0$i</option> ";
				else
								echo " <option>$i</option> ";
				}
			?>
			</select>
		   <select name="mes" > 
		   <option>Elija Mes</option>
		<?
			for($i=1;$i<13;$i++){
				if($i<10)
				echo " <option>0$i</option> ";
				else
								echo " <option>$i</option> ";
				}
			?>
			</select>
			<select name="ano" >
			<option>Elija A&ntilde;o</option>
			<?
			for($i=2008;$i<2020;$i++)
				echo " <option>$i</option> ";
			?>
			</select> 
			</td>
          </tr>
        </table>
        <p>
          <label>
	
		  <input type="submit" name="enviar" value="Enviar">
		  
          </label>
          <label>
          <input type="reset" name="borrar" value="borrar">
          </label>
        </p>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
</body>
</html>
