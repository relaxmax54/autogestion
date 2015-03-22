<h1>Formulaire de saisie d'opérations financières</h1>
<?

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
	$champs=substr($champs,0,-1).')';
	$valeur=substr($valeur,0,-1).')';

	echo $champs,$valeur;

	$champs='(date_saisie,type,montant,compte,libelle,date_valeur)';
	$valeur='(14/01/15,2,10,2,"essai",14/01/15)';


	$reponse = Bdd::getInstance($this)->prepare("INSERT INTO operations VALUES :val)");
	$reponse->execute(array('val' => $valeur));

}

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