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

//on détermine le dossier d'installation de l'application
$application->root="http://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

//chargement des paramètres de l'application
$parametre -> chargerParametres();
$application -> parametre = $parametre;

header("Location:accueil/");

?>
