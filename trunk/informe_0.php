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
	height:501px;
	z-index:0;
	left: 0;
	top: -16px;
	background-color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:26px;
	z-index:1;
	left: 264px;
	top: 3px;
}
.Estilo1 {
	font-size: 18px;
	font-weight: bold;
	color: #004080;
}
#Layer3 {
	position:absolute;
	width:358px;
	height:67px;
	z-index:2;
	left: 223px;
	top: 58px;
}
#Layer4 {
	position:absolute;
	width:528px;
	height:115px;
	z-index:3;
	left: 136px;
	top: 94px;
}
#Layer5 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 233px;
	top: 173px;
}
.Estilo2 {font-weight: bold}
-->
  </style>
  <script>
 function valida(formulario){
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
    <div class="Estilo1" id="Layer2">Informe Pedidos </div>
    <div id="Layer4">
	
<form  onSubmit="return valida(formulario2)" name="formulario2" method="post" action="informe_01.php">
	  <table width="516" border="3" bordercolor="#004080" bgcolor="#F9FFFF">
          <tr>
            <td width="136" bordercolor="#004080" bgcolor="#F9FFFF"><div align="center" class="Estilo2">Pedidos </div></td>
            <td width="360" bordercolor="#004080" bgcolor="#F9FFFF">	<select name="dia" > 

			<option selected>Elija Dia</option>
			<? 
			for($i=1;$i<32;$i++){
				if($i<10)
				echo " <option>0$i</option> ";
				else
								echo " <option>$i</option> ";
				}
			?>
			</select>   <select name="mes" > 
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
		<input type="submit" name="enviar" value="Enviar">
          </label>
          <label>
          <input type="reset" name="borrar" value="borrar">
          </label>
      </form>
	</div>
  </div>
  </div>
</body>
</html>
