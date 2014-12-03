<?php
//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});
session_start();
$application = &$_SESSION['application'];
if (!is_object($application))$application = new Application();
$application=new Application();

//on détermine le dossier d'installation de l'application
$application->root="http://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

header("Location:accueil/");

?>
