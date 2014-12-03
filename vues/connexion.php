<?
echo "<table style='margin:auto; background:#EEEEEE; padding:8px'>";
echo "<tr><td><a style='text-align:center'; href=".$application->root."/action/connexion/>";

if($application->connexion){
	echo "deconnexion";
}else{
	echo "connexion";
}

echo "</a></td></tr>";

echo "<tr><td><a style='text-align:center'; href=".$application->root."/action/inscription/>M'inscrire</a></td></tr>
</table>";

?>
