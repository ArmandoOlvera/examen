<?php
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACTO</title>
</head>
<body>
CONTACTO

<table style="border: 1px solid;">

	<thead>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellidos</td>
			<td>email</td>
			<td>telefono</td>
		</tr>
	</thead>
	<tbody>
		<?php $vistaUsuario = new MvcController();
			$vistaUsuario -> vistaContactoController();
			 ?>
	</tbody>
</table>

<span>De click <a href="index.php?action=provedores">aqui para ir a los provedores.</a></span>
</body>
</html>