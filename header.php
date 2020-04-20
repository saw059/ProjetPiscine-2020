<?php
require 'db.class.php';
$DB = new DB('');
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

    <script type="text/javascript">
            function Encherir(){

                var prix = prompt("l'enchére est a "+prix+ "   $ combien vous etes pret a mettre ?","prix")



                
                
                if (isNaN(prix)==false && prix!=null && prix!="" && prix!=" "){ 
                    alert("vous avez encherie : "+prix+"$")
                }
                else{
                    alert("la valeur n'est pas un nombre");
                    }

            }
            
        </script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">EBAY ECE</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact nous</a></li>
                    <li class="nav-item dropdown show">
                                <a data-toggle="dropdown" aria-expanded="true" class="dropdown-toggle nav-link" href="#">se connecter</a>
                            <div role="menu" class="dropdown-menu">
                            <a role="presentation" class="dropdown-item" href="login.html">acheteur</a>
                            <a role="presentation" class="dropdown-item" href="login2.html">vendeur</a>
                            </div>
                            </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.html">s'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Product Page</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
