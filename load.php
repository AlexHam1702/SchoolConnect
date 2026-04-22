<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=schoolconnect_fb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT chatpseudo, classchat, message FROM minichat ORDER BY ID');

//Filtre Anti Insulte

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	
	echo '<div class="others" style="margin-bottom: 0px;"> <div class="name" style="width: 175px;margin-left: -10px;margin-bottom: 10px;background-color: #e5e5e5;color: #727272;">' . htmlspecialchars($donnees['chatpseudo']) . ' </div>'  . htmlspecialchars($donnees['message']) . '</div>';

}

$reponse->closeCursor();

?> </div>
