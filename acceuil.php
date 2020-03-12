<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Game of throne</title>
        <meta name="author" content="Vianney Bouault">
        <meta name="description" content="Accueil">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">  
    </head>
    <body>
       <?php include('_header.html'); ?>
            
            
            <section class="headAcceuil">
                <section id="conteneurimgSlide">
                    <img  id="imgSlide"  src="https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg"  alt="image slider" />
                </section>
                <h2 class=titreAcceuil>Voyages dans l'univers de GOT</h2>
                <section class="conteneurLigne">
                    
                        <input  class="btnSuivant" type="button" value="<" title="Photo précédente" onclick="slide('arriere')"/>
                    
                    <section class="conteneurFiltre">
                        <select name="destination">
                            <option value="test1">test1</option>
                            <option value="test2">test2</option>
                            <option value="test3">test3</option>
                        </select>
                        
                        <button type="button" class=" boutonAcc btn btn-dark">GO !</button>
                    </section>
                   
                   <input class="btnSuivant" type="button" value=">" title="Photo suivante" onclick="slide('avant')"/>
                   
                  
                </section>
                
            </section>
         
           
            
            
            
            <section class="phraseAcceuil">
                <article>Choisissez votre déstination, puis partez à la conquète de Westeros en quelques clics</article>
            </section>
            <section class="carte">
                <iframe src="https://www.google.com/maps/d/embed?mid=1rObkxhdJkIpo9Mcwu_f5Hy2hVvSL8XBa" width="640" height="480"></iframe>
            </section>

            <?php include('_footer.html'); ?>
            
            <script src="img-deroulante.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--======================================footer yacine-->       
<footer>
    <div class="color-diff-back"></div>
        <div class="back-color">
            <a href="#"><h1 class="h1-footer" title="Soyez Les Bienvenus">Agence De Voyage GOT<span class="color-point">...</span></h1></a>
        <figure class="figure-footer">
            <a href="#" class="a-logo-footer"><img class="logo-footer" src="https://fr.web.img6.acsta.net/r_1280_720/newsv7/19/04/29/06/35/0225049.jpg" alt="Logo" title="Le logo de notre agence de voyage"></a>
                <figcaption class="figuration-footer">Etes<span class="color-point"><strong>-</strong></span>Vous Prêt<span class="color-point"><strong>.</strong></span></figcaption>
        </figure>
            <div class="rebrique-footer">
                <ul>
                    <li title="Lets Go" class="li"><a href="#"><strong>Contactez<span><strong>-</strong></span></strong>Nous <span class="color-point"><strong>&rarr;</strong></span></a></li>
                        <li title="Non Ne Faites pas ça SVP"><a href="#"><strong>Annulation &#x1F614;</strong></a></li>
                            <li title="Venez Voir"><a href="#"><strong>Vente Flash <span class="color-point">...</span></strong></a></li>
                                <li><a href="#"><strong>Nos Conditions <span class="color-point">...</span></strong></a></li>
               </ul>
        </div>
            <div class="copy">Copyright <span class="color-point"><strong>&copy;</strong></span> 2020 All rights reserved<span class="color-point"><strong>.</strong></span></div>
                <div class="img-soc-paiem">
                    <img class="img-paiement-footer" src="https://aufonddujardin.fr/boutique/wp-content/uploads/2017/11/paiement_securise_paypal.png" alt="Icone de paiement" title="Paiement sécurisé">
                        <img class="reseau-sociau" src="https://miro.medium.com/max/621/1*XyvBPSfQebxwD652YQOtqw.png" alt="Nos réseaux sociaux" title="Nos réseaux sociaux">
                </div>
        </div>
    <div class="end-color-footer"></div>
</footer>
    <!--======================================footer yacine-->
    </body>
</html>