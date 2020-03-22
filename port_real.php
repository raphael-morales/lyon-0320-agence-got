
    <?php include("_header.html");?>
    <section>
      <article class="summer"><h2>Bienvenue à Port Real</h2></article>
    </section>
​
    <section>
      <article class="titre">
        <p>Les contrées du sud vous attendent</p>
      </article>
    </section>
    <section class="image-fond1" class="image-fond1">
      <article class="carre"></article>
    </section>
​
    <section>
      <article class="text1">
        De nombreuses activités sont pratiquées par les gens du Sud,<br />
        aussi viens  profiter du climat chaleureux et de l'air marin!
      </article>
    </section>
​    <?php
        $activity = [
            "<div class='ph1 ph'><p>'concour de boisson'</p></div>",
            "<div class='ph2 ph'><p>balade en cheval long du port</p></div>",
            "<div class='ph3 ph'><p>faire du jet sky</p></div>",
            "<div class='ph4 ph'><p>ceuillir des fleurs</p></div>"
        ];
    ?>
    <section>
      <article class="album">
        <?php
        foreach ($activity as $activities){
            echo $activities;
        }
        ?>
      </article>
    </section>
​
    <section class="button">
        <button type="button" class="btn btn-secondary btn-lg btn-block">Réservez</button>
      </section>
    <?php include("_footer.html");?>
