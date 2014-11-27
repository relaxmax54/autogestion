<?
/*
** Classe application
*/
class Application{

	public $BDD_SERVER;
	public $BDD_NAME;
	public $BDD_USER;
	public $BDD_PASSWORD;
	public $connexion;
	public $root;
	/*
	** constructeur par défaut qui charge les paramètres de configuration de l'application
	*/
	public function __construct(){
		//à modifier pour récupérer les paramètres en XML
		$this->BDD_SERVER="127.0.0.1";
		$this->BDD_NAME="framework";	
		$this->BDD_USER="raoul"; 
		$this->BDD_PASSWORD="musique";
		$this->connexion=false;
	}
}


?>