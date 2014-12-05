<?php
/*
** modelise la personnalisation du site par les membres
*/
class Parametre
{
  /* chargement des parametres
   * on récupère chaque paramètre avec $parametre->nom_du_champ
   */
  public function chargerParametres()
  {
    //récupération des données de la base
    $param=Bdd::getInstance()->prepare("SELECT * FROM parametres;");
    $param->execute();

    $tab=$param->fetchAll(PDO::FETCH_ASSOC);
    
    for($i=0;$i<count($tab);$i++)
    {
      $this->$tab[$i]['nom']=$tab[$i]['valeur'];
    }
  }
}
?>
