<h3>Affichage des comptes déclarés dans la base</h3>

<?php

//création formulaire
$form = new Form('exemple','POST');
//on ajoute les champs souhaités
$form ->add('Submit', 'ok')
      ->value("Sauvegarder");
$form ->bound($_POST);

$reponse=Bdd::getInstance()->prepare("SELECT * FROM comptes");
$reponse->execute();

//On parcourt l'objet récupéré sous forme de tableau pour afficher chacun des enregistrements

$i=0;

while ($element = $reponse->fetch(PDO::FETCH_ASSOC)){
	foreach ($element as $key => $value) {

			$form	->add('Text', $key.$i)
					->value($value)	
		 	        ->label($key);
		 	$i++;
	}
}

//affiche le formulaire
echo $form;

$reponse->closeCursor();
?>