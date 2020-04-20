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

  if(!empty($_POST['encherir']))
  {
    $encherir = $_POST['encherir'];

    $reponse = $bdd->query('SELECT * FROM items WHERE ID = 1');
    while ($donnees = $reponse->fetch())
    {
      if($donnees['prix'] < $encherir)
      {
        $req = $bdd->prepare('UPDATE items SET prix = :nvPrix WHERE ID = 1');
        $req->execute(array('nvPrix' => $encherir));
        header('Location:achat2.php');
      }
      else
      {
        header('Location:encherir.php');
      }
    }

    
  }
  else
  {
    header('Location:encherir.php');
  }
?>