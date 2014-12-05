<?
echo "<table style='margin:auto; background:#EEEEEE; padding:8px'>";
echo "<tr><td><a style='text-align:center'; href=".$this->root."/action/connexion/>";

if($this->connexion){
	echo "deconnexion";
}else{
	echo "connexion";
}

echo "</a></td></tr>";

echo "<tr><td><a style='text-align:center'; href=".$this->root."/action/inscription/>M'inscrire</a></td></tr>
</table>";

?>
