<?
//classe pour gérer la connexion de données avec mysql via PDO

/*
 * Classe implémentant un singleton pour PDO
 * @author Savageman
 * De cette manière on pourra en récupérer l'instance à souhait
 */
class Bdd extends PDO {

  private static $_instance;

  /* Constructeur : héritage public obligatoire par héritage de PDO */
  public function __construct( ) {
  
  }

  /* Singleton */
  public static function getInstance($application) {

    if (!isset(self::$_instance)) {
      
      try {
        // Connection au serveur
        $dns          = "mysql:host=$application->BDD_SERVER;dbname=$application->BDD_NAME";
        $utilisateur  = $application->BDD_USER;
        $motDePasse   = $application->BDD_PASSWORD;
        // Options de connection
        $options=array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        self::$_instance = new PDO($dns,$utilisateur,$motDePasse,$options);
      } catch (PDOException $e) {
        echo $e;
      }
    } 
    return self::$_instance; 
  }
}
?>
