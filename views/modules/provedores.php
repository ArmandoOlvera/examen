<?php
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>PROVEDORES</title>
</head>
<body>
PROVEDORES

<table style="border: 1px solid;">

	<thead>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>rfc</td>
			<td>direcion</td>
			<td>email</td>
			<td>borrar</td>
			<td>Editar</td>
		</tr>
	</thead>
	<tbody>
		<?php $vistaUsuario = new MvcController();
			$vistaUsuario -> vistaProvedoresController();
			 ?>
	</tbody>
</table>

<span>De click <a href="index.php?action=contacto">aqui para ir a los contactos.</a></span>



<h1>REGISTRO DE PROVEDORES</h1>

<form method="post">
	<?php
		$registro = new MvcController();
		$registro -> registroProvedor(); 
		$registro -> borrarProvedorController();
	?>
	NOmbre
	<input type="text" name="nombre" id="name"><br>
	RFC
	<input type="text" name="rfc" id="rfc"><br>
	DIRECCION
	<input type="text" name="direccion" id="direccion"><br>
	EMAIL
	<input type="text" name="email" id="email">
	<br>
	<button type="submit" >Guardar</button>
</form>



 
</body>
</html>