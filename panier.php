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

    <?php
session_start();
$erreur = false;
$i=0;
echo '<h2>Contenu de votre panier</h2><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
$total_panier = 0;

$totalItems = count($_SESSION['panier']['id']);

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
     <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">

 <?php
                                          while ($i<$totalItems) :
                                            $total_panier += $_SESSION['panier']['prix'][$i];
                                            ?>

                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"> <img width="150px" heigth="150px"src=<?php echo $_SESSION['panier']['photo'][$i] ;?>></div>
                                           
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="p"> <?php echo $_SESSION['panier']['nom'][$i] ;?></a>
                                           
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantite</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span><?php echo $_SESSION['panier']['prix'][$i] ;?>€</span>
                                             <a href=<?php echo "process.php?delete&id=" . $_SESSION['panier']['id'][$i] ;?> class="btn btn-info">Supprimer</a>
                                        </div> 
                                           
                                        
                                    </div>
                                </div>

                                 <?php $i++; endwhile; ?>

                             
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <h4><span class="text">Subtotal</span><span class="price"><?php echo $total_panier;?></span></h4>
                                <h4><span class="text">promotion</span><span class="price">$0</span></h4>
                                <h4><span class="text">livraison</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price"><?php echo $total_panier;?></span></h4><a href="acheter.php"><button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button></a>
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


</body>

</html>