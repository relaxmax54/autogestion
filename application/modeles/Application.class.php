<?
class Application extends Framework{
	/**
	* affiche les vues demandées par l'utilisateur
	* @param $vue : nom du fichier requis 
	*/
	public function afficheVue($vue){
		if(file_exists("application/vues/".$vue.".php")){
			require("application/vues/".$vue.".php");
		}else{
			require("vues/".$vue.".php");
		}
	}
	/**
	* affiche les modules demandes par l'utilisateur
	* @param $module : nom du fichier requis 
	*/
	public function afficheModule($module){
		if(file_exists("application/modules/".$module.".php")){
			require("application/modules/".$module.".php");
		}else{
			require("modules/".$module.".php");
		}
	}

}
?>