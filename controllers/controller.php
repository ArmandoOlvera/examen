'<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	  
	#ENLACES
	#----------------------------------       ---

	public function enlacesPaginasController(){

		 

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "ingresar";
		}
		//echo $enlaces;

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

#------------------------------------

	public function vistaProvedoresController(){

		$respuesta = Datos::vistaProvedoresModel("provedores");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["id"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["rfc"].'</td>
				<td>'.$item["direccion"].'</td>
				<td>'.$item["email"].'</td>
				<td><a href="index.php?action=provedores&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
				<td><a href="index.php?action=editar_provedores&id='.$item["id"].'"><button>Editar</button></a></td>

			</tr>';

		}

	}


#------------------------------------

	public function vistaContactoController(){

		$respuesta = Datos::vistaContactosModel("contacto");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["id"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["apellidos"].'</td>
				<td>'.$item["email"].'</td>
				<td>'.$item["telefono"].'</td>
			</tr>';

		}

	}
//////////////////
	#------------------------------------ tipoRegistro
	public function registroProvedor(){

		if(isset($_POST["nombre"])){
			$datosController = array( "nombre"=>$_POST["nombre"], 
								      "rfc"=>$_POST["rfc"],
								      "direccion"=>$_POST["direccion"],
								      "email"=>$_POST["email"] );

			$respuesta = Datos::registroProvedorModel($datosController, "provedores");

			if($respuesta == "success"){

				//header("location:index.php?action=ok");
				echo "<br>Guardado!!!<br>";

			}

			else{

				//header("location:index.php");
				echo "Fallo";
			}

		}

	}

///
	public function borrarProvedorController(){

		if(isset($_GET["idBorrar"])){
			$datosController = $_GET["idBorrar"];
			$respuesta = Datos::borrarProvedorModel($datosController, "provedores");

			if($respuesta == "success"){
				echo '<br>BORRADO<br>';
			}else{
				 
			}
		}
	}
//////////////////////////
	public function editarProvedorController(){

		$datosController = $_GET["id"];
		$respuesta = Datos::editarProvedoresModel($datosController, "provedores");
	 
			
		echo'
		<input class="form-control"  type="hidden" value="'.$respuesta["id"].'" name="id">

		<label for="nombre">Nombre:</label>
		<input type="text"  class="form-control"  value="'.$respuesta["nombre"].'" name="nombre" required>

 <label for="rfc">RFC:</label>
		<input type="text"  class="form-control"  value="'.$respuesta["rfc"].'" name="rfc" required>
 
 <label for="nombre">direccion:</label>
		<input type="text"  class="form-control"  value="'.$respuesta["direccion"].'" name="direccion" required>


<label for="nombre">Email:</label>
		<input type="text"  class="form-control"  value="'.$respuesta["email"].'" name="email" required>



			 <input class="form-control"  type="submit" value="Actualizar">
 
		 ';
echo '</div>';


echo '</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>';
	}
////////////
	public function actualizarProvedorController(){
		if(isset($_POST["id"])){
			$datosController = array( "id"=>$_POST["id"],
							          "nombre"=>$_POST["nombre"],
				                      "rfc"=>$_POST["rfc"],
				                      "direccion"=>$_POST["direccion"],
				                      "email"=>$_POST["email"]
										);
			
			$respuesta = Datos::actualizarProvedorModel($datosController, "provedores");

			if($respuesta == "success"){
					echo '<br>ACTUALUZADO<br>';

			}
			else{
				echo "error";
			}
		}
	}
/////////////////////////////////////////
	}
 

?>