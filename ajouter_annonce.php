<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
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
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Vendez ici !</h2>
                    <p>C'est simple et rapide tu n'as juste qu'as remplir les informations demandés</p>
                </div>
                <form method="post" action="ajouter_annonce2.php">

                    <div class="form-group"><label for="nom">Nom de l'article</label><input class="form-control item" type="text" id="nom" name="nom"></div>
                     <div class="form-group"><label for="prix">Prix de l'article</label><input class="form-control item" type="number" id="prix" min="1" name="prix"></div>
                    <div class="form-group"><label for="prix">Description de l'article</label><textarea class="form-control" id="desc" name="desc"></textarea> </div>
                    <div class="form-group">
                    <label for="id">Catégorie : </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="radio" name="dd" value="Feraille"><label class="form-check-label" for="checkbox">Feraille ou trésor</label>
                        </div>
                    </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio" name="dd" value="musée"><label class="form-check-label" for="checkbox">Bon pour le musée</label></div><br>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radio" name="dd" value="vip"><label class="form-check-label" for="checkbox">Accessoire VIP</label></div><br>
                    <div class="form-group"><label for="img">Photo: <input type="file" id="img" name="img" accept="image/png, image/jpeg"></label></div>
                    <input type="submit" value="Publier" class="btn btn-primary" style="float: center;">

                
                </form>

              </div>
            </div>
          </div>
        </section>
                   
                   
                </form>

            </div>
           
        </div>



        
        <hr class="divider-d">
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