<?
/**
* Classe Framework
*/
class Framework{

	public $BDD_SERVER;
	public $BDD_NAME;
	public $BDD_USER;
	public $BDD_PASSWORD;
	public $connexion;
	public $root;
	/**
	* constructeur par défaut qui charge les paramètres de configuration de l'application
	*/
	public function __construct(){
		//le visiteur du site est déconnecté par défaut
		$this->connexion=false;
	}
	/**
	* charge un fichier xml
	* @param $fichier : nom du fichier xml à charger
	*/
	public function chargerXml($fichier){
		// controle de l'existence du fichier
		if(file_exists($fichier)){

		  // Instanciation de la classe DomDocument pour ouvrir le xml
		  $xml = new DOMDocument();
		  // chargement du fichier configuration.xml
		  $xml->load($fichier);
		  // recherche des constantes par leur nom
		  $configuration = $xml->getElementsByTagName("constante");

		  foreach($configuration as $element)
		  {
		      if ($element->hasAttribute("nom")) 
		      {
		        $nom_element        = $element->getAttribute("nom");
		        $valeur_element     = trim($element->nodeValue);
		        $this->$nom_element = $valeur_element;
		      }
		  }
		  return true;

		}else{

			echo $fichier;
			return false;
		}
	}
	/**
	* affiche les vues demandées par l'utilisateur
	* @param $vue : nom du fichier requis 
	*/
	public function afficheVue($vue){
		require("vues/".$vue.".php");
	}
	/**
	* réalise les actions demandées par l'utilisateur
	* @param $action : nom du fichier requis 
	*/
	public function realiseAction($action){
		require("actions/".$action.".php");
	}
	/**
	* affiche les modules demandés par l'utilisateur
	* @param $module : nom du fichier requis 
	*/
	public function afficheModule($module){
		require("modules/".$module.".php");
	}
}

?>
