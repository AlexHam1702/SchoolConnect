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
$req = $bdd->query('SELECT * FROM filtre');
	$mots = [];
	$rp = [];

	while($m = $req->fetch()) {
		array_push($mots, $m['insulte']);
		$r = '';
	   for($i=0;$i<strlen($m['insulte']);$i++) { 
	      $r .= '*';
	   }
	   array_push($rp, $r);
	}
	var_dump($mots);
	var_dump($rp);

	$_POST['message'] = str_replace($mots, $rp, strtolower($_POST['message']));
	$_POST['message'] = ucfirst($_POST['message']);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (chatpseudo, classchat, message) VALUES(?, ?, ?)');
$req->execute(array($_POST['chatpseudo'], $_POST['classchat'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: messagerie.php');
?>