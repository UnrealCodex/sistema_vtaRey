<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Ver Individual</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<style>
		html,
 body {
    height: 100%;
	 font-size: 18px;
  }  
		
	</style>
</head>

<body>
<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 	
	
	<div align="center">
	  <p><a href="zxing://scan/?ret=http://192.168.0.193/sistema_vtaRey/ver_inv_in.php?model_ext={CODE}">ESCANEAR CODIGO BARRAS</a>
	    
	    <br>
  <br>
  <a href="zxing://scan/?inventario=http://192.168.0.193/sistema_vtaRey/ver_inv_in.php?model_ext={CODE}">ESCANEAR CODIGO BARRAS inventario</a><br>
<br>
<a href="https://www.google.com/maps/dir/25.6869639,-100.3438387//@25.6824759,-100.2917355,15z/data=!5m1!1e1"> test</a>
	    <?php
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM inventario WHERE model_ext = '$_REQUEST[model_ext]'  ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{	
	
	include ('ver_solo.php');
	
}
	
	?>			
	    
	    </p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	</div>
		</div>
		</div>
	</div>
</body>
</html>