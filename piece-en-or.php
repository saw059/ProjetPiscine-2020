<?php require 'header.php'; ?>

<?php 
$req=$DB->db->query("SELECT * FROM products");
$req->fetch()

?>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="gallery">
                                    <div class="sp-wrap"><a href="assets/img/tech/shopping.png"><img class="img-fluid d-block mx-auto" src="assets/img/tech/shopping.png"></a>
                                        
                                    </div>
                                </div>

                            <div class="col-md-6 offset-xl-0">
                                <div class="info">
                                    <h3>piece d'or</h3>
                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                                    <div class="price">
                                        <h3>$20300.00</h3>
                                    </div>
                                    <button class="btn btn-primary" type="button" style="margin: 10px;"><a href="#" style="color: white;">meilleur offre</a></button>
                                    <button onclick="Encherir()" class="btn btn-primary" type="button" style="margin: 10px;"style="color: white;">Encherir
                                    </button>
                                    <button
                                        class="btn btn-primary" type="button" style="margin: 10px;"><a href="acheter.html" style="color: white;">acheter</a></button>
                                        <button class="btn btn-primary" type="button" style="float: right;margin: 10px;"><i class="icon-basket"></i>
                                            <a href="panier.html" style="color: white;">panier</a></button>
                                        <div
                                            class="summary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                <p>blabla</p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <figure class="figure"></figure><img src="assets/img/tech/shopping.png"></div>
                                    <div class="col-md-7">
                                        <h4>piece en or</h4>
                                        <p>blabla</p>
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
            <?php require 'footer.php'; ?>