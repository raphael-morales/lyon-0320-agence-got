 <?php include("_header.html");?>
    <section>
        <article class="winter"><h2>Bienvenue en winterfell</h2></article>
    </section>
    
​
    <section>
        <article class="titre">
            <p>Les contrées du nord vous attendent</p></article>
    </section>
    <section class="image-fond">
        
        
        <article class="carre"></article>
        
        
    </section>
​
    <section>
        
        <article class="text1">De nombreuses activités sont pratiquées par les gens du nord,<br> aussi viens en profiter grâce à la balade de winterfell avec les diverses activités</article>
​
    </section>
​
    <?php
    $activityWinterfell = [
        '<div class="photo1"><p>balade en ski</p></div>',
        '<div class="photo2"><p>balade en chiens de traineau</p></div>',
        '<div class="photo3"><p>chasse au marcheur blancs</p></div>',
        '<div class="photo4"><p>balade en montagne</p></div>'
    ];
    ?>​
    <section>
        <article class="album">
            <?php
            foreach ($activityWinterfell as $activitiesWinterfell){
                echo $activitiesWinterfell;
            }
            ?>
        </article>
    </section>
​
    <section class="button">
        <button type="button" class="btn btn-secondary btn-lg btn-block">Réservez</button>
      </section>
        <?php include("_footer.html");?>