<h1>Formulaire de saisie d'opérations financières</h1>
<?
print_r($_POST);
echo $_POST['date_saisie'];

//test les valeurs retournées par le navigateur
if(isset($_POST['ok']) && $_POST['ok']=='Sauvegarder'){
	//MAJ de la BDD à partir des données POST récupérées



	$champs='(';
	$valeur='(';
	foreach($_POST as $element=>$value){
		if($element!='uniqid' && $element!='ok'){
			$champs.=$element.',';
			$valeur.=$value.',';
		}
	}
	$champs.=')';
	$valeur.=')';
}
echo $champs,$valeur;
/*
	$reponse = Bdd::getInstance($this)->prepare("INSERT INTO operations('date_saisie',)
																		)
																		 VALUES()");
	$reponse->execute(array(
		'val' => $value,
		'enr' => $element
	));
}

*/

//$saisie=new Formulaire("Formulaire de saisie d'opérations financières");

$saisie=new Form('saisie','POST');
$champs=array('date_saisie','type','montant','compte','libelle','date_valeur');

foreach($champs as $element){
	$saisie	->add('Text',$element)
			->label(ucfirst($element));
}

$saisie ->add('Submit', 'ok')
      	->value("Sauvegarder");    
$saisie ->bound($_POST);


echo $saisie;

?>