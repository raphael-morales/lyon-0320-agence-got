<?php include('_header.html'); ?>

<section class="headAcceuil">
    <section id="conteneurimgSlide">
        <img  id="imgSlide"  src="https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg"  alt="image slider" />
    </section>
    <h2 class=titreAcceuil>Voyagez dans l'univers de <span class="petit">GOT</span><span class="grand">Game of Thrones</span></h2>
    <section class="conteneurLigne">

        <input  class="btnSuivant" type="button" value="<" title="Photo précédente" onclick="slide('arriere')"/>

        <section class="conteneurFiltre">
            <select name="destination" id="select">
                <option value="">Choisissez votre destination</option>
                <option value="0">Winterfell</option>
                <option value="1">Port Real</option>
            </select>

            <button type="button" class=" boutonAcc btn btn-dark" onclick="go()">GO !</button>
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
