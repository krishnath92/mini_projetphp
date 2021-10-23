<?php
function display($a){
	echo "<pre>";
	print_r($a);
	echo "</pre>";
}

function initMenu(){
	echo "
		<link rel='stylesheet' href='stylesheet.css' />
		<div style='width: 100%; height: 57px; background-color: #050727;'>
		<div id='navigation'>
			<ul>
				<li><a href='formulaire.php'>Accueil</a></li>
	
				<li><a href='simulation.php'>Simulation</a></li>
	
				<li><a href='archive.php'>Archive</a></li>
					
				<li><a href='admin.php'>Admin</a></li>
			</ul>
		</div><!-- #navigation --></div>
	";
	echo "<div id=global>";
	echo "<h1 style='font-size:48px'>Emprunt bancaire</h1><hr/>";
}

function initStatut($user){
	echo "<table>
				<tr>
					<td><p style='text-align: left';>Bonjour <span style='color: #3030ea'>$user</span> !</p></td>
					<td style='padding-left: 600px'>
						<form method='post' action='action-deconnexion.php' style='padding-top: 15px;'>
						<div id='boutons'><input id='bouton' name='Deconnexion' type='submit' value='Déconnexion'/></div>
						</form>
					</td>
				</tr>
				</table>";
}

function supprcsv($csv){

	$row = 1;
	$handle = fopen('fichier.csv', 'r');
	while( !feof($handle) )
		{
			$line = fgets($handle);
			if (!($row == 2) )
				file_put_contents('fichier_final.csv', $line, FILE_APPEND);

		$row += 1;
		}
		fclose($handle);
		
		// Tu peux ensuite renommer fichier_final.txt si tu veux
		rename('fichier_final.csv', 'fichier.csv');

}

?>