<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){

//   editar_provedores.php
		if($enlaces == "provedores" || $enlaces == "contacto"   || $enlaces == "editar_provedores" ){

			$module =  "views/modules/".$enlaces.".php";
		
		}
		 

		else{

			$module =  "views/modules/provedores.php";

		}
		
		return $module;

	}

}

?>