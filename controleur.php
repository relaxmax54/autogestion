<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
	if (file_exists('application/modeles/'.$class.'.class.php')){
    	require 'application/modeles/' . $class . '.class.php';
	}else{
    	require 'modeles/' . $class . '.class.php';
	}
});

session_start();
$application = &$_SESSION['application'];
if (!is_object($application))$application = new Application();
$parametre = &$_SESSION['parametre'];
if (!is_object($parametre))$parametre = new Parametre();

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
			$application->vue="erreurURL";
		}
	}else{
	//sinon c'est une vue qui est demandée
		$application->vue=$_GET['d1'];
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
	$application->vue="erreurURL";
}

require("vues/page_globale.php");

?>
