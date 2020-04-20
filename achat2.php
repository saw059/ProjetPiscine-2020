<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

</head>

<body>
    <?php
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
    ?>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">EBAY ECE</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="compte.php"><i class="icon-user"></i>votre compte</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-3"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-3">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="panier.php"> <i class="icon-basket"></i>panier</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="login2.php">vendre</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">achat</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item dropdown show">
                                <a data-toggle="dropdown" aria-expanded="true" class="dropdown-toggle nav-link" href="#">categorie</a>
                            <div role="menu" class="dropdown-menu">
                            <a role="presentation" class="dropdown-item" href="Ferraille.php">Ferraille ou trésor</a>
                            <a role="presentation" class="dropdown-item" href="musee.php">Bon pour le musée</a>
                            <a role="presentation" class="dropdown-item" href="vip.php">Accessoire VIP</a>
                            <a role="presentation" class="dropdown-item" href="achat2.php">Tout voir</a>
                            </div>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="loginAdmin.php">ADMIN</a></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                    </div>
                    <form action="search" method="get" class="form-inline">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Je cherche...">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-info"><span class="fa fa-search"></span>
                  Chercher
                </button>
              </div>
            </div>
          </form>
        </div>
                </div>
            </nav>
            <div class="container">
                <div class="block-heading">
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav nav-tabs ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact nous</a></li>
                            <li class="nav-item dropdown show">
                                <a data-toggle="dropdown" aria-expanded="true" class="dropdown-toggle nav-link" href="#">se connecter</a>
                            <div role="menu" class="dropdown-menu show">
                            <a role="presentation" class="dropdown-item" href="login.php">acheteur</a>
                            <a role="presentation" class="dropdown-item" href="login2.php">vendeur</a>
                            </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="registration.php">s'inscrire</a></li>
                        </ul>
                    </div>
                    <h2 class="text-info">Catalog Page</h2>
                    <p>Les produits diponibles</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categories</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">feraille ou trésor</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">bon pour le musée</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">accesoire vip</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse"
                                    id="filters">
                                    <div class="filters">
                                        <div class="filter-item">
                                            <h3>Categories</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">feraille ou trésor</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">bon pour le musée</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">accesoire vip</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM items');
                                    // On affiche chaque entrée une à une
                                    while ($donnees = $reponse->fetch())
                                    {
                                    ?> 

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"></a></div>
                                            <div class="product-name">
                                                <img src="
                                                        <?php
                                                            echo $donnees['photo'];
                                                        ?>
                                                ">
                                                <?php
                                                    echo $donnees['nom'];
                                                ?>
                                            </div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>
                                                        <?php
                                                            echo $donnees['prix']."$"; 
                                                        ?>  
                                                    </h3>
                                                </div>
                                            </div>
                                            <a href="description.php?id=<?php echo $donnees['ID'];?>" class="btn btn-info">Détails</a>
                                        </div>
                                        
                                    </div>
                                    <?php  
                                    }                                 
                                    $reponse->closeCursor();  
                                    ?>                                    
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
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