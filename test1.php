<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=panier;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM products');
$donnees = $db->query('SELECT nom FROM products');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>