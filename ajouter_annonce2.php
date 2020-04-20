<?php
 //connexion à la base de données
try
{
    // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=projetpiscine;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}


if (!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['desc']) && !empty($_POST['dd']) && !empty($_POST['img']))
{
  $nom = $_POST['nom'];
  $photo = $_POST['img'];
  $description = $_POST['desc'];
  $categorie = $_POST['dd'];
  $prix = $_POST['prix'];

  $req = $bdd->prepare('INSERT INTO items(nom, photo, description, categorie, prix, datePoste) VALUES(:nom, :photo, :description, :categorie, :prix, :datePoste)');
  $req->execute(array(

    ':nom' => $nom,
    ':photo' => $photo,
    ':description' => $description,
    ':categorie' => $categorie,
    ':prix' => $prix,
    ':datePoste' =>date('Y/m/d h:i:s')
  ));

  header('Location:ajouter_annonce.php');
}
else
{
  header('Location:catalog-page.php');
}

?>
