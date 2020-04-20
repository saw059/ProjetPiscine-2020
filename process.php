<?php
session_start();



// Création du panier si n'existe pas dans la session de l'utilisateur
if (! isset($_SESSION['panier'])){
	echo "No cart yet";
	$_SESSION['panier'] = array();
	$_SESSION['panier']['id'] = array();
	$_SESSION['panier']['nom'] = array();
	$_SESSION['panier']['prix'] = array();
	$_SESSION['panier']['photo'] = array();
	$_SESSION['panier']['desc'] = array();
}  

if (isset($_GET['add'])){ // Ajouter un nouvel article


$conn = mysqli_connect("127.0.0.1", "root", "", 'projetpiscine');
// Check connection
if ($conn->connect_error) {
	echo "<h1> NOOOOOOOO</h1>";
    die("Connection failed: " . $conn->connect_error);
}
$crtID =  intval($_GET["id"]);
$strQuery = "SELECT * FROM items WHERE id = " . $crtID;

$result = $conn->query($strQuery) or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($result);
// Voici les données externes utilisées par le panier
$id_article   = isset($data['ID'])   ? $data['ID']   : null;
$nom_article  = isset($data['nom'])  ? $data['nom']  : null;
$prix_article = isset($data['prix']) ? $data['prix'] : '?';
$desc_article = isset($data['description']) ? $data['description'] : null;
$photo_article = isset($data['photo']) ? $data['photo'] : null;


$erreur = false;



	array_push($_SESSION['panier']['id'], $id_article);
	array_push($_SESSION['panier']['nom'], $nom_article);
	array_push($_SESSION['panier']['prix'],$prix_article);
	array_push($_SESSION['panier']['desc'], $desc_article);
	array_push($_SESSION['panier']['photo'], $photo_article);


 	echo '<h3></h3>',$_SESSION['panier']['nom'][0],'</br>';
	echo '<h3></h3>',$_SESSION['panier']['prix'][0],'</br>';
	echo '<h3></h3>',count($_SESSION['panier']),'</br>';
	echo '<h3>id : </h3>',$_SESSION['panier']['id'][0],'</br>';
	echo $id_article;
	header("Location: panier.php");
	die();

}
if (isset($_GET['delete'])){
	echo "ok";
	  //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['id'] = array();
      $tmp['nom'] = array();
      $tmp['prix'] = array();
      $tmp['desc'] = array();
      $tmp['photo'] = array();

      for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
      {
      	echo" ok";
         if ($_SESSION['panier']['id'][$i] !== $_GET['id'])
         {
            array_push( $tmp['id'],$_SESSION['panier']['id'][$i]);
            array_push( $tmp['nom'],$_SESSION['panier']['nom'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
            array_push( $tmp['desc'],$_SESSION['panier']['desc'][$i]);
            array_push( $tmp['photo'],$_SESSION['panier']['photo'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);

      echo $_SESSION['panier'];
      //display();
      	header("Location: achat2.php");

}

/*
  $_SESSION['panier'][$id_article]['nom']  = $nom_article;
  $_SESSION['panier'][$id_article]['prix'] = $prix_article;
  $_SESSION['panier'][$id_article]['description'] = $desc_article;

   echo '<h3></h3>',$_SESSION['panier'][$id_article]['nom'],'</br>';
	echo '<h3></h3>',$_SESSION['panier'][$id_article]['prix'],'</br>';
	echo '<h3></h3>',count($_SESSION['panier']),'</br>';
		echo '<h3></h3>',$_SESSION['panier'][$id_article]['prix'],'</br>';

	echo '<button href="detruireSession.php" class="btn btn-info">Supprimer session</button>';
*/
/*
   <li><form>', $_SESSION['panier'][$id_article]['nom'], ' (', number_format($_SESSION['panier'][$id_article]['prix'], 2, ',', ' '), ' €) ',
       '<input type="hidden" name="id_article" value="', $_SESSION['panier'][$id_article] , '" />
        <br />
        <input type="submit" name="supprimer" value="Supprimer" />
      </form>
      </li>';*/

else if (isset($_GET['supprimer']))  unset($_SESSION['panier']); // Supprimer un article du panier



function display (){
	echo '<h2>Contenu de votre panier</h2><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
  $total_panier = 0;
 for ($i=0 ;$i < count($_SESSION['panier']['nom']) ; $i++){  	

         echo  $_SESSION['panier']['nom'][$i] . "</br>";
         echo  $_SESSION['panier']['prix'][$i]. "</br>";

        
        
}
}
}
// Voici l'affichage du panier

        

/*
  foreach($_SESSION['panier'] as $id_article=>$article_acheté){
  	echo $_SESSION['panier'][$id_article]['id'];
    // On affiche chaque ligne du panier : nom, prix et quantité modifiable + 2 boutons : modifier la qté et supprimer l'article
    if (isset($article_acheté['nom']) && isset($article_acheté['prix']) && isset($article_acheté['qte'])){
     
/*
      echo '<li><form>', $article_acheté['nom'], ' (', number_format($article_acheté['prix'], 2, ',', ' '), ' €) ',
       '<input type="hidden" name="id_article" value="', $id_article , '" />
        <br />Qté: <input type="text" name="qte_article" value="', $article_acheté['qte'] , '" />
        <input type="submit" name="modifier" value="Nouvelle Qté" />
        <input type="submit" name="supprimer" value="Supprimer" />
      </form>
      </li>';
      
      // Calcule le prix total du panier 
      $total_panier += $article_acheté['prix'] * $article_acheté['qte'];
    }
  }
  echo '<hr><h3>Total: ', number_format($total_panier, 2, ',', ' '), ' €'; // Affiche le total du panier
	*/

//else { echo 'Votre panier est vide'; } // Message si le panier est vide
?>