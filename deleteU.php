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
  
$req = $bdd->prepare('DELETE  FROM utilisateurs where id=:num LIMIT 1');

$req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
$executeIsok=$req->execute();
if ($executeIsok) {
  $message="le produit a été supprimer";

  # code...
} else {
  $message="echec";
  # code...
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
  <h1>supression</h1>
  <p><?= $message ?></p>
</body>
</html>