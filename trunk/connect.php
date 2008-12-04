  <?
$dsn = "prueba";
$usuario = "system";
$clave="ale123";
$cid=odbc_connect($dsn, $usuario, $clave);
if (!$cid){
	exit("<strong>Ya ocurrido un error tratando de conectarse con el origen de datos.</strong>");
}	
?>