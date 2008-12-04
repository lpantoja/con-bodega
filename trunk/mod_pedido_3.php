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
-->
  </style>
  
  </head>
  <body >
<div style="width: 800px; position: relative; margin-left: auto; margin-right: auto; left: 0; top: 0;">
	
  <div id="Layer1">
  <?
    include ("connect.php");
 $cod_pro0=$_POST['cod_pro0'];
$cant_prod0=$_POST['cant_prod0'];
$cod_pro1=$_POST['cod_pro1'];
$cant_prod1=$_POST['cant_prod1'];
$cod_pro2=$_POST['cod_pro2'];
$cant_prod2=$_POST['cant_prod2'];
$cod_pro3=$_POST['cod_pro3'];
$cant_prod3=$_POST['cant_prod3'];
$cod_pro4=$_POST['cod_pro4'];
$cant_prod4=$_POST['cant_prod4'];
$cod_pro5=$_POST['cod_pro5'];
$cant_prod5=$_POST['cant_prod5'];
$cod_pro6=$_POST['cod_pro6'];
$cant_prod6=$_POST['cant_prod6'];
$cod_pro7=$_POST['cod_pro7'];
$cant_prod7=$_POST['cant_prod7'];
$cod_pro8=$_POST['cod_pro8'];
$cant_prod8=$_POST['cant_prod8'];
$cod_pro9=$_POST['cod_pro9'];
$cant_prod9=$_POST['cant_prod9'];
$cod_pro10=$_POST['cod_pro10'];
$cant_prod10=$_POST['cant_prod10'];
$cod_pro11=$_POST['cod_pro11'];
$cant_prod11=$_POST['cant_prod11'];
$cod_pro12=$_POST['cod_pro12'];
$cant_prod12=$_POST['cant_prod12'];
$cod_pro13=$_POST['cod_pro13'];
$cant_prod13=$_POST['cant_prod13'];
$cod_pro14=$_POST['cod_pro14'];
$cant_prod14=$_POST['cant_prod14'];
$cod_pro15=$_POST['cod_pro15'];
$cant_prod15=$_POST['cant_prod15'];
$cod_pro16=$_POST['cod_pro16'];
$cant_prod16=$_POST['cant_prod16'];
$cod_pro17=$_POST['cod_pro17'];
$cant_prod17=$_POST['cant_prod17'];
$cod_pro18=$_POST['cod_pro18'];
$cant_prod18=$_POST['cant_prod18'];
$cod_pro19=$_POST['cod_pro19'];
$cant_prod19=$_POST['cant_prod19'];
$cod_pro20=$_POST['cod_pro20'];
$cant_prod20=$_POST['cant_prod20']; 
$pedido = $_POST['cod_ped'];
$usuario=16275643;

if($cant_prod0){
$sql="INSERT INTO Pedido_producto VALUES ($cod_pro0,$pedido,$usuario,$cant_prod0)";
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod1){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro1,$pedido,$usuario,$cant_prod1)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod2){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro2,$pedido,$usuario,$cant_prod2)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod3){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro3,$pedido,$usuario,$cant_prod3)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod4){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro4,$pedido,$usuario,$cant_prod4)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod5){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro5,$pedido,$usuario,$cant_prod5)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod6){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro6,$pedido,$usuario,$cant_prod6)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod7){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro7,$pedido,$usuario,$cant_prod7)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro,$pedido,$usuario,$cant_prod)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod8){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro8,$pedido,$usuario,$cant_prod8)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod9){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro9,$pedido,$usuario,$cant_prod9)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod10){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro10,$pedido,$usuario,$cant_prod10)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod11){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro11,$pedido,$usuario,$cant_prod11)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod12){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro12,$pedido,$usuario,$cant_prod12)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod13){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro13,$pedido,$usuario,$cant_prod13)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod14){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro14,$pedido,$usuario,$cant_prod14)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod15){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro15,$pedido,$usuario,$cant_prod15)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod16){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro16,$pedido,$usuario,$cant_prod16)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod17){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro17,$pedido,$usuario,$cant_prod17)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod18){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro18,$pedido,$usuario,$cant_prod18)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($cant_prod19){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro19,$pedido,$usuario,$cant_prod19)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($cant_prod20){
 $sql="INSERT INTO Pedido_producto VALUES ($cod_pro20,$pedido,$usuario,$cant_prod20)";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

//////////////////////////////////////////////////////////////////////////////
$mod_cod_pro0=$_POST['mod_cod_pro0'];
$mod_cant_prod0=$_POST['mod_cant_prod0'];
$mod_cod_pro1=$_POST['mod_cod_pro1'];
$mod_cant_prod1=$_POST['mod_cant_prod1'];
$mod_cod_pro2=$_POST['mod_cod_pro2'];
$mod_cant_prod2=$_POST['mod_cant_prod2'];
$mod_cod_pro3=$_POST['mod_cod_pro3'];
$mod_cant_prod3=$_POST['mod_cant_prod3'];
$mod_cod_pro4=$_POST['mod_cod_pro4'];
$mod_cant_prod4=$_POST['mod_cant_prod4'];
$mod_cod_pro5=$_POST['mod_cod_pro5'];
$mod_cant_prod5=$_POST['mod_cant_prod5'];
$mod_cod_pro6=$_POST['mod_cod_pro6'];
$mod_cant_prod6=$_POST['mod_cant_prod6'];
$mod_cod_pro7=$_POST['mod_cod_pro7'];
$mod_cant_prod7=$_POST['mod_cant_prod7'];
$mod_cod_pro8=$_POST['mod_cod_pro8'];
$mod_cant_prod8=$_POST['mod_cant_prod8'];
$mod_cod_pro9=$_POST['mod_cod_pro9'];
$mod_cant_prod9=$_POST['mod_cant_prod9'];
$mod_cod_pro10=$_POST['mod_cod_pro10'];
$mod_cant_prod10=$_POST['mod_cant_prod10'];
$mod_cod_pro11=$_POST['mod_cod_pro11'];
$mod_cant_prod11=$_POST['mod_cant_prod11'];
$mod_cod_pro12=$_POST['mod_cod_pro12'];
$mod_cant_prod12=$_POST['mod_cant_prod12'];
$mod_cod_pro13=$_POST['mod_cod_pro13'];
$mod_cant_prod13=$_POST['mod_cant_prod13'];
$mod_cod_pro14=$_POST['mod_cod_pro14'];
$mod_cant_prod14=$_POST['mod_cant_prod14'];
$mod_cod_pro15=$_POST['mod_cod_pro15'];
$mod_cant_prod15=$_POST['mod_cant_prod15'];
$mod_cod_pro16=$_POST['mod_cod_pro16'];
$mod_cant_prod16=$_POST['mod_cant_prod16'];
$mod_cod_pro17=$_POST['mod_cod_pro17'];
$mod_cant_prod17=$_POST['mod_cant_prod17'];
$mod_cod_pro18=$_POST['mod_cod_pro18'];
$mod_cant_prod18=$_POST['mod_cant_prod18'];
$mod_cod_pro19=$_POST['mod_cod_pro19'];
$mod_cant_prod19=$_POST['mod_cant_prod19'];
$mod_cod_pro20=$_POST['mod_cod_pro20'];
$mod_cant_prod20=$_POST['mod_cant_prod20']; 
 $eliminar=sprintf('Eliminar esta fila');

$cod_pro_mo0=$_POST['cod_ped_bo0'];
$cod_pro_mo1=$_POST['cod_ped_bo1'];
$cod_pro_mo2=$_POST['cod_ped_bo2'];
$cod_pro_mo3=$_POST['cod_ped_bo3'];
$cod_pro_mo4=$_POST['cod_ped_bo4'];
$cod_pro_mo5=$_POST['cod_ped_bo5'];
$cod_pro_mo6=$_POST['cod_ped_bo6'];
$cod_pro_mo7=$_POST['cod_ped_bo7'];
$cod_pro_mo8=$_POST['cod_ped_bo8'];
$cod_pro_mo9=$_POST['cod_ped_bo9'];
$cod_pro_mo10=$_POST['cod_ped_bo10'];
$cod_pro_mo11=$_POST['cod_ped_bo11'];
$cod_pro_mo12=$_POST['cod_ped_bo12'];
$cod_pro_mo13=$_POST['cod_ped_bo13'];
$cod_pro_mo14=$_POST['cod_ped_bo14'];
$cod_pro_mo15=$_POST['cod_ped_bo15'];
$cod_pro_mo16=$_POST['cod_ped_bo16'];
$cod_pro_mo17=$_POST['cod_ped_bo17'];
$cod_pro_mo18=$_POST['cod_ped_bo18'];
$cod_pro_mo19=$_POST['cod_ped_bo19'];
$cod_pro_mo20=$_POST['cod_ped_bo20']; 

 if($mod_cant_prod0 && ($mod_cod_pro0 !=  $eliminar)){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod0 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro0 and ID_USUARIO=$usuario";
echo "$sql";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod1 && $mod_cod_pro1 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod1 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro1 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod2 && $mod_cod_pro2 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod2 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro2 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod3 && $mod_cod_pro3 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod3 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro3 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod4 && $mod_cod_pro4 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod4 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro4 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod5 && $mod_cod_pro5 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod5 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro5 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod6 && $mod_cod_pro6 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod6 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro6 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cant_prod7 && $mod_cod_pro7 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod7 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro7 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cant_prod8 && $mod_cod_pro8 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod8 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro8 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod9 && $mod_cod_pro9 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod9 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro9 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod10 && $mod_cod_pro10 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod10 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro10 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod11 && $mod_cod_pro11 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod11 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro11 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod12 && $mod_cod_pro12 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod12 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro12 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod13 && $mod_cod_pro13 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod13 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro13 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod14 && $mod_cod_pro14!=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod14 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro14 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod15 && $mod_cod_pro15!=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod15 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro15 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod16 && $mod_cod_pro16 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod16 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro16 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod17 && $mod_cod_pro17 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod17 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro17 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod18 && $mod_cod_pro18 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod18 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro18 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cant_prod19 && $mod_cod_pro19 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod19 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro19 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cant_prod20 && $mod_cod_pro20 !=  $eliminar){ 
$sql="update pedido_producto set CANTIDAD=$mod_cant_prod20 where ID_PEDIDO=$pedido and ID_PROD=$mod_cod_pro20 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
 $eliminar=sprintf('Eliminar esta fila');
 
 if($mod_cod_pro0== $eliminar ){ 
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo0 and ID_USUARIO=$usuario";
echo "$sql";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro1== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo1 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro2== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo2 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro3== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo3 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro4== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo4 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro5== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo5 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro6== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo6 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cod_pro7== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo7 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cod_pro8== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo8 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro9== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo9 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro10== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo10 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro11== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo11 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro12== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo12 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro13== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo13 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro14== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo14 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro15== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo15 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro16== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo16 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro17== $eliminar ){
$sql="delete from pedido_producto  where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo17 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro18== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo18 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

if($mod_cod_pro19== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo19 and ID_USUARIO=$usuario";	
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}
if($mod_cod_pro20== $eliminar ){
$sql="delete from pedido_producto where ID_PEDIDO=$pedido and ID_PROD=$cod_pro_mo20 and ID_USUARIO=$usuario";
 $result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
}

  
  ?>
  </div>
  </div>
</body>
</html>
