<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<p>
</p>
	<table width="100%" border="1">
	  <tbody>
	    <tr>
	      <td align="center"><img src="<?php echo $rowAccount2['fot_p01']; ?>" width="300px"></td>
        </tr>
	    <tr>
	      <td align="center">
			<strong>Modelo:</strong><br><?php echo $rowAccount2['model_ext']; ?><br>
			<strong>Nombre de Proveedor:</strong><br><?php echo $rowAccount2['nom_provee']; ?><br>
			<strong>Medidas (Largo x Alto x Ancho):</strong><br><?php echo $rowAccount2['med_prod']; ?><br>
			<strong>Color/Diseño:</strong><br><?php echo $rowAccount2['col_dis']; ?><br>
			<strong>Disponibles:</strong><br>
			  
			  <?php $disp = $rowAccount2['existen'] - $rowAccount2['en_trans'] ; 
			  echo $disp;
			  
			  if (($rowAccount2['existen'] == 0) AND ($rowAccount2['en_trans'] == 0) AND ($rowAccount2['resurtir'] != "SI") ) 
			  {
				 echo ('<input type="submit" value="Resurtir" >') ;
			  }
			  
			  
			  
			  
			  ?><br>
			<strong>En transito:</strong><br><?php echo $rowAccount2['en_trans']; ?><br>  
		  </td>
        </tr>
		<tr>
	      <td align="center">Fotos Extras<br>
<img src="<?php echo $rowAccount2['fot_p02']; ?>" width="300px"><br>
<img src="<?php echo $rowAccount2['fot_p03']; ?>" width="300px"><br>
<img src="<?php echo $rowAccount2['fot_p04']; ?>" width="300px"><br>
<img src="<?php echo $rowAccount2['fot_p05']; ?>" width="300px"><br>
		  </td>
        </tr>
		<tr>
	      <td align="center"><img src="<?php echo $rowAccount2['cod_bar']; ?>" width="300px"><br></td>
        </tr>  
      </tbody>
</table>
	<p>&nbsp;</p>
</body>
</html>