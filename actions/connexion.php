<?

$application->connexion=!$application->connexion;

header("Location:$application->root/accueil/");

?>