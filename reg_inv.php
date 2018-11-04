<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Producto</title>
</head>

<body>
	<h1> Registro de Producto </h1>
	
	<form action="reg_inv_pro.php" method="post" >
	Categoria:
<select name="catego" id="catego">
  <option value="-" selected="selected">-</option>
  <option value="01 - Carteras">01 - Carteras</option>
  <option value="02 - Bolsas">02 - Bolsas</option>
  <option value="03 - Monederos">03 - Monederos</option>
  <option value="04 - Tarjeteros">04 - Tarjeteros</option>
  <option value="05 - Mochilas">05 - Mochilas</option>
  <option value="06 - Mariconeras/Cangureras">06 - Mariconeras/Cangureras</option>
</select><br>
Modelo:
	<input name="model_ext" type="text" id="model_ext"><br>
Nombre del Proveedor:
	<input name="nom_provee" type="text" id="nom_provee"><br>
Medidas del Producto:
	<input name="med_prod" type="text" id="med_prod"><br>
Color/Diseño:
	<input name="col_dis" type="text" id="col_dis"><br>
Inventario Inicial:
	<input name="existen" type="text" id="existen"><br>
Link de Venta Online:
	<input name="vta_online" type="text" id="vta_online"><br>
Codigo de Barras:
	<input name="cod_bar" type="text" id="cod_bar"><br>
Foto  01:
	<input name="fot_p01" type="text" id="fot_p01"><br>
Foto  02:
	<input name="fot_p02" type="text" id="fot_p02"><br>
Foto  03:
	<input name="fot_p03" type="text" id="fot_p03"><br>
Foto  04:
	<input name="fot_p04" type="text" id="fot_p04"><br>	
Foto  05:
	<input name="fot_p05" type="text" id="fot_p05"><br>	
<input type="submit">
</form>
	
</body>
</html>