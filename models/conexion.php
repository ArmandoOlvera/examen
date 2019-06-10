<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=examen","root","tacosconsalsaverde123");
		return $link;


	}

}

?>