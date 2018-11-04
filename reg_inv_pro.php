<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
require_once  'conexion.php'; //conexion a la BD

	$p0 = $_POST['hp0'];
	
	
	
	
mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");
mysqli_query("SET NAMES 'utf8'");
mysqli_set_charset($link, 'utf8');
//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into quest (
	
	?>
	
	
	
	
</body>
</html>