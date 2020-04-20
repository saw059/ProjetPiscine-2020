<?php
 //connexion à la base de données
try
{
  // On se connecte à MySQL
  $btype = new PDO('mysql:host=localhost;dbname=projetpiscine;charset=utf8', 'root', '');
  $btype->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}
echo $_POST['nom']."<br />";
echo $_POST['email']."<br />";

echo $_POST['motDePasse']."<br />";

echo $_POST['type']."<br />";


if(!empty($_POST['nom']) && !empty($_POST['motDePasse']) && !empty($_POST['email']) && !empty($_POST['type']) && !empty($_POST['argent']))
{
	$nom = $_POST['nom'];
	$email = $_POST['email'];
  $motDePasse = $_POST['motDePasse'];
  $type = $_POST['type'];
  $argent = $_POST['argent'];

    $req = $btype->prepare('INSERT INTO utilisateurs(nom, email, motDePasse, type, compteEnBanque) VALUES(:nom, :email, :motDePasse, :type, :compteEnBanque)');
    $req->execute(array(
	'nom' => $nom,
	'email' => $email,
	'motDePasse' => $motDePasse,
	'type' => $type,
  'compteEnBanque' => $argent
	));
  header('Location:catalog-page.php');

    
}
else
{
	header('Location:registration.php');
}

?>




