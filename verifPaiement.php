<?php

session_start();
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
  $reponse = $bdd->query('SELECT * FROM utilisateurs');


  if(!empty($_POST['carte']) && !empty($_POST['YY']) && !empty($_POST['MM'])  && !empty($_POST['cardNumber']) && !empty($_POST['CVC']))
  {
      $carte = $_POST['carte'];
      $compteEnBanque = $_SESSION['prix'];
      $MM = $_POST['MM'];
      $YY = $_POST['YY'];
      $number = $_POST['number'];
      $CVC = $_POST['CVC'];
      $compteur = 0;
      $nvCompte = 0;

      while ($donnees = $reponse->fetch())
      { 
        if($carte === $donnees['nom'] && $donnees['compteEnBanque'] > $compteEnBanque)
        {
          $compteur++;
          $nvCompte = $donnees['compteEnBanque'] - $compteEnBanque;
        }
      }

      if($compteur > 0)
      {
        $req = $bdd->prepare('UPDATE utilisateurs SET compteEnBanque = :nvCompte WHERE nom = :nom_ut');
        $req->execute(array('nvCompte' => $nvCompte, 'nom_ut' => $carte));
        header('Location:catalog-page.php');
      }
      else
      {
        header('Location:acheter.php');
      }
  }
  else
  {
    header('Location:acheter.php');
  }

$reponse->closeCursor();


      /*while($res = $req->fetch())
      {
        if($carte === $res['nom'] &&  $compteEnBanque >= $res['compteEnBanque'])
        {
          echo "achat effectué <br />".$res['nom']." ".$res['compteEnBanque'];
        }
        else
        {
          echo "achat raté <br />";
        }
      }
      echo $carte.'<br />';
      echo $compteEnBanque.'<br />';


  }
  else
  {
      header('Location:acheter.php');
  }*/
  ?>