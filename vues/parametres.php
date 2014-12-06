<h1>Paramètres de personnalisation</h1>

<?php
/*
**	affiche tous les paramètres de personnalisation de l'application et enregistre les modifications
**  autorise aussi la saisie directe de nouveaux champs avec leurs valeurs
*/

//test les valeurs retournées par le navigateur
if(isset($_POST['ok']) && $_POST['ok']=='Sauvegarder')
{
	//MAJ de la BDD à partir des données POST récupérées
	foreach($_POST as $element=>$value)
	{
		$reponse = Bdd::getInstance($this)->prepare("UPDATE parametres SET valeur = :val WHERE nom =:enr");
		$reponse->execute(array(
			'val' => $value,
			'enr' => $element
		));
	}
	//ajout d'un nouveau paramètre le cas échéant dans la BDD
	if($_POST['new_param']!="")
	{
		$val = $_POST['new_valeur'];
		$enr = $_POST['new_param'];

		$reponse = Bdd::getInstance($this)->prepare("INSERT INTO parametres (nom, valeur) VALUES (:enr,:val)");
		$reponse->execute(array(
			'val' => $_POST['new_valeur'],
			'enr' => $_POST['new_param']
		));
		//MAJ de l'objet parametres
		$this->parametre->$enr = $val;
		//réinitialisation des valeurs pour permettre une nouvelle insertion
		$_POST['new_valeur']='';
		$_POST['new_param']='';
	}
}

//création formulaire
$form = new Form('exemple','POST');
//on ajoute les champs souhaités
$form ->add('Submit', 'ok')
      ->value("Sauvegarder");    
$form ->bound($_POST);


$param=Bdd::getInstance($this)->prepare("SELECT * FROM parametres;");
$param->execute();

$tab=$param->fetchAll(PDO::FETCH_ASSOC);

foreach($tab as $element)
{	
	$libellé=$element['nom'];
	// si des commentaires sont définis, on les affiche aussi
	if($element['commentaire']!="")$libellé.=" ( ".$element['commentaire']." )";
	$form	->add('Text', $element['nom'])
			->value($element['valeur'])	
 	        ->label($libellé);
}
//on ajoute un champs d'insertion
$form 	->add('Text',"new_param")
		->label('Libellé du paramètre à insérer');
$form 	->add('Text',"new_valeur")
		->label('Valeur du nouveau paramètre');		

//affiche le formulaire
echo $form;

?>