<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?
for($i=0;$i<21;$i++){
$var=sprintf('$cod_pro_mo'.$i.'=$_POST[\'cod_ped_bo'.$i.'\'];');
echo "$var <br>";
}
?>
</body>
</html>
