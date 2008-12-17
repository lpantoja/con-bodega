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
	width:407px;
	height:295px;
	z-index:2;
	left: 161px;
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
	if((formulario.cod_pro.value)==false){
		alert("El campo codigo producto debe rellenarse con caracteres alfanuméricos simples");
		return false; // NO se enviará el formulario.
	}
	er=/^[a-zA-Z0-9]+$/;
	if(er.test(formulario.nom_pro.value)==false){
		alert("El campo Nombre productos debe rellenarse con caracteres alfanuméricos simples");
		return false; // NO se enviará el formulario.
	}

	er=/^[a-zA-Z ñÑáéíóúÁÉÍÓÚuüÜÇç]+$/;
	if(er.test(formulario.descr_pro.value)==false){
		alert("El campo Descripcion debe rellenarse con caracteres alfabéticos");
		return false; // NO se enviará el formulario.
	}

	er=/^[0-9]+$/;
	if(er.test(formulario.precio.value)==false){
		alert("El campo Precio debe rellenarse con caracteres Númericos");
		return false; // NO se enviará el formulario.
	}
	
	er=/^[0-9]+$/;
	if(er.test(formulario.stock_max.value)==false){
		alert("El campo Stock Max debe rellenarse con caracteres Númericos");
		return false; // NO se enviará el formulario.
	}
	
	er=/^[0-9]+$/;
	if(er.test(formulario.stock_min.value)==false){
		alert("El campo Sotck Min rellenarse con caracteres Númericos");
		return false; // NO se enviará el formulario.
	}
		er=/^[0-9]+$/;
	if(er.test(formulario.dia.value)==false){
		alert("El campo Dia debe rellenarse con el dia");
		return false; // NO se enviará el formulario.
	}

	er=/^[0-9]+$/;
	if(er.test(formulario.mes.value)==false){
		alert("El campo Mes debe rellenarse con el mes");
		return false; // NO se enviará el formulario.
	}
	
	er=/^[0-9]+$/;
	if(er.test(formulario.ano.value)==false){
		alert("El campo año rellenarse con el año");
		return false; // NO se enviará el formulario.
	}

	  return true; // Se enviará el formulario.
}
</script>
  </head>
<body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
    <div class="Estilo1" id="Layer2">Ingreso Datos Producto </div>
    <div id="Layer3">
      <form  onSubmit="return valida(formulario)"  name="formulario" method="post" action="ing_produc.php">
        <table width="437" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
          <tr>
            <td width="139" bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">C&oacute;digo producto </div></td>
            <td width="278" bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="cod_pro"> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Nombre producto </div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="nom_pro"> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Descrici&oacute;n</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><textarea name="descr_pro"></textarea> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Precio</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="precio"></td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Stock max </div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="stock_max"> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Stock m&iacute;nimo</div></td>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><input type="text" name="stock_min"> </td>
          </tr>
          <tr>
            <td bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Fecha de ingreso </div></td>
           <td bordercolor="#004080" bgcolor="#F9FFFF">
			<select name="dia" > 

			<option>Eliga Dia</option>
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
		   <option>Eliga Mes</option>
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
			<option>Eliga A&ntilde;o</option>
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
