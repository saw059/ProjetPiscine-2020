<!DOCTYPE html>
<html>

<?php

// Create connection

$conn = mysqli_connect("127.0.0.1", "root", "", 'projetpiscine');
// Check connection
if ($conn->connect_error) {
    echo "<h1> NOOOOOOOO</body>h1>";
    die("Connection failed: " . $conn->connect_error);
}
$crtID =  intval($_GET["id"]);
$strQuery = "SELECT * FROM items WHERE id = " . $crtID;

$result = $conn->query($strQuery) or die(mysqli_error($conn));
$donnees = mysqli_fetch_assoc($result);

 ?>

<head>
    meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">EBAY ECE</a><button donnees-toggle="collapse" class="navbar-toggler" donnees-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact nous</a></li>
                    <li class="nav-item dropdown show">
                            <a data-toggle="dropdown" aria-expanded="true" class="dropdown-toggle nav-link" href="#">se connecter</a>
                            <div role="menu" class="dropdown-menu">
                            <a role="presentation" class="dropdown-item" href="login.php">acheteur</a>
                            <a role="presentation" class="dropdown-item" href="login2.php">vendeur</a>
                            </div>
                            </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">s'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo $donnees['nom'];?></h2>
                </div>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div class="sp-wrap"><a href="<?php echo $donnees['photo'];?>"><img class="img-fluid d-block mx-auto" src="<?php echo $donnees['photo'];?>"></a></div>
                                </div></div>
                            <div class="col-md-6 offset-xl-0">
                                <div class="info">
                                    <h3><?php echo $donnees['nom'];?></h3>
                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                                    <div class="price">
                                        <h3><?php echo $donnees['prix' ];?>€</h3>
                                    </div><button class="btn btn-primary" type="button" style="margin: 10px;"><a href="#" style="color: white;">meilleur offre</a></button><button class="btn btn-primary" type="button" style="margin: 10px;"><a href="encherir.php" style="color: white;">Encherir</a></button>
                                    <button
                                        class="btn btn-primary" type="button" style="margin: 10px;"><a href="acheter.php" style="color: white;">acheter</a></button><button class="btn btn-primary" type="button" style="float: right;margin: 10px;"><i class="icon-basket"></i><a href="process.php?add&id=<?php echo $donnees['ID'];?>" style="color: white; margin: right    ;">panier</a></button>
                                        <div
                                            class="summary"></div>
                                            <div>Temps avant fin des enchères.</div>
                                            <div id="affiche">""</div>
 
<script type="text/javascript">
var finTemps = <?php echo strtotime($donnees['datePoste'])?>; // < ?php echo $donnees['finEnchere']; ? >
var timestampActuel = <?php echo time(); ?>; // donne le timestamp actuel
var duree = timestampActuel - finTemps; // durée = temps total - temps actuel
var dureeHeure, dureeMinute, dureeSeconde; // initialise variable, pour qu'elles ne soient pas global
var div = document.getElementById("affiche"); // récupère la div affiche
 
// fait un interval régulier de 1s
var timer = setInterval(function(){
                                  
        // boucle tant que la durée est supérieur à 0
        if(duree>0)
        {
            dureeHeure = parseInt(duree/3600);
            dureeMinute = parseInt((duree-(dureeHeure*3600))/60);
            dureeSeconde = duree-((dureeHeure*3600)+(dureeMinute*60));
            var old_contenu = div.firstChild; // récup le premier enfant (le texte)
            div.removeChild(old_contenu); // supprime l'ancien contenu
            var texte = document.createTextNode(dureeHeure+":"+dureeMinute+":"+dureeSeconde); // crée un node texte valeur de la durée
            div.appendChild(texte); // affiche le node
             
            duree -= 1; // diminue la durée de l'enchère
        }
        // si l'enchère est finis
        else
        {
            var old_contenu = div.firstChild;
            div.removeChild(old_contenu); // supprime le contenu
            var texte = document.createTextNode('Enchère finis !'); // affiche message de fin, voir une alert
            div.appendChild(texte);
            clearInterval(timer); // interrompt la boucle de setInterval
        }
    }, 1000); // 1000ms
</script>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item"><a class="nav-link active" role="tab" donnees-toggle="tab" id="description-tab" href="#description">Description</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show description" role="tabpanel" id="description">
                               <div class="row">
                                    <div class="col-md-5">
                                        <figure class="figure"></figure><img width="272px" height="272px" src=<?php echo $donnees['photo'];?>></div>
                                    <div class="col-md-7">
                                        <h4><?php echo $donnees['nom'];?></h4>
                                        <p><?php echo $donnees['description'];?></p>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clean-related-items">
                    <div class="items"></div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>demarrer</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">se connecter</a></li>
                        <li><a href="contact-us.php">Contact nous</a></li>
                        <li><a href="registration.php">s'inscrire</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="about-us.php">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>