<?php
require_once("mesFonctions.php");
initMenu();

echo "<fieldset style='margin-bottom:1em'><legend>Archive</legend>";
$file="fichier.csv";
if (file_exists($file)){
	$fp = fopen($file,'r'); //ouverture du fichier
	$res = fgetcsv($fp);

	$nbr_entete = count($res);
	//echo $num;
	
	//mise en page entête
	echo "<table border='2' bordercolor='444444' cellpadding = '7' cellspacing='2'>";
	echo "<tr>";

	for ($i=0; $i< $nbr_entete-2; $i++){
		echo "<th bgcolor='CCCCCC'>".$res[$i]."</th>";
	}
	echo "</tr>";
	
	//mise en page reste des données
	while($res = fgetcsv($fp)){
		$donne = count($res);
		echo "<tr>";
		for ($i=0; $i< $donne-2; $i++){
			echo "<th bgcolor='CCCCCC'>".$res[$i]."</th>";
		}
		echo "</tr>";
	}
	echo "</table>";
	fclose($fp); //fermeture du fichier
}
else
	die("Fichier inexistant");

echo "</fieldset>";
?>
