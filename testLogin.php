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


  if(!empty($_POST['email']) && !empty($_POST['motDePasse']))
  {
      $email = $_POST['email'];
      $motDePasse = $_POST['motDePasse'];
      $type = 'acheteur';
      $compteur = 0;

      $req = $bdd->prepare('SELECT email, motDePasse, type FROM utilisateurs');
      $req->execute(array('email' => $email, 'motDePasse' => $motDePasse, 'type' => $type));
    

      while($res = $req->fetch())
      { 
        if($motDePasse === $res['motDePasse'] && $email === $res['email'] && $type === $res['type'])
        {
          $compteur++;
        }
      }

      if($compteur > 0)
      {
        header('Location:achat2.php');
      }
      else
      {
        header('Location:login.php');
      }

      $req->closeCursor();  

  }


  else
  {
    header('Location:login.php');//renvoi du formulaire
  }
 
?>