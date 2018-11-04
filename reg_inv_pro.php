<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	date_default_timezone_set('America/Mexico_City');
$date = date('Y/m/d');
require_once  'conexion.php'; //conexion a la BD

$catego=$_POST['catego'];
$model_ext=$_POST['model_ext'];
$nom_provee=$_POST['nom_provee'];
$med_prod=$_POST['med_prod'];
$col_dis=$_POST['col_dis'];
$existen=$_POST['existen'];
$vta_online=$_POST['vta_online'];
$cod_bar=$_POST['cod_bar'];
$fot_p01=$_POST['fot_p01'];
$fot_p02=$_POST['fot_p02'];
$fot_p03=$_POST['fot_p03'];
$fot_p04=$_POST['fot_p04'];
$fot_p05=$_POST['fot_p05'];
	
	
	
	
mysqli_select_db($link,"base_nego"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");
mysqli_set_charset($link, 'utf8');
//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into inventario (
catego,
model_ext,
nom_provee,
med_prod,
col_dis,
existen,
vta_online,
cod_bar,
fot_p01,
fot_p02,
fot_p03,
fot_p04,
fot_p05,
fech_act
) values (
'".$catego."',
'".$model_ext."',
'".$nom_provee."',
'".$med_prod."',
'".$col_dis."',
'".$existen."',
'".$vta_online."',
'".$cod_bar."',
'".$fot_p01."',
'".$fot_p02."',
'".$fot_p03."',
'".$fot_p04."',
'".$fot_p05."',
'".$date."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);
	
	
	
	
	?>
	
	
	
	
</body>
</html>