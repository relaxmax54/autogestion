<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});
session_start();
$application = &$_SESSION['application'];
if (!is_object($application))$application = new Application();

//gestion des routes

if(isset($_GET['d1'])){
	//si la requete est une action
	if($_GET['d1']=="action"){
		if(isset($_GET['d2'])){
			$application->realiseAction($_GET['d2']);
			/*
			** actions valables :
			** connexion
			** inscription
			** retour
			*/

		}else{
			$vue="erreurURL";
		}
	}else{
	//sinon c'est une vue qui est demandée
		$vue=$_GET['d1'];
		/*
		** vues possibles :
		** accueil
		** comptes
		** synthese
		** saisie
		** bootstrap
		*/
	}
}else{
	$vue="erreurURL";
}

require("vues/page_globale.php");

?>
