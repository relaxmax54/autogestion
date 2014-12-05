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
		//à modifier pour récupérer les paramètres en XML

		//paramètres de connexion à la base de données
		$this->BDD_SERVER="127.0.0.1";
		$this->BDD_NAME="framework";	
		$this->BDD_USER="raoul"; 
		$this->BDD_PASSWORD="musique";
		//le visiteur du site est déconnecté par défaut
		$this->connexion=false;
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
}

?>
