<?php
require_once constant ( "SITE_PATH" ) . "/src/model/dao/MembreDao.php";
require_once constant ( "SITE_PATH" ) . "/src/model/object/Membre.php";
class MembreController {
	
	public function createAction() {
		$membre = MembreDao::create ();
		
		$view_path = constant("SITE_PATH") . "/src/view/confirmationcompte.php";
		require_once constant("SITE_PATH") . "/src/view/page.php";
	}
	
	public function readAction($id) {
		$membre = MembreDao::read ( $id );
		
		// Implementer la vue
	}
	public function formCreateAction() {
		// normalement lecture des données du client dans la base de données
		// $view_name = $action . ".php";
		
		// Implementer la vue
	}
}
