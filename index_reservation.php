 <?php include('_header.html'); ?>
  </header>

  <h1 class="reservation">Formulaire de réservation</h1>

<section class="formulaire">

<section class="destination">
  <label for="destination">Où?</label>
<?php
$options = [
        '<option value="">Choisissez votre destination</option>',
        '<option value="port_real">Port Real</option>',
        '<option value="port_real">Port Real</option>',
        '<option value="winterfell">Winterfell</option>'
];
?>
  <select class="select" name="destination" id="destination" onclick = "changePrix()">
    <?php
    foreach ($options as $option) {
        echo $option;
    }
    ?>


  </select>
</section>



<section class="date">
<section>
  <label for="start">Départ</label>
  <input type="date" id="start" name="start" min="2020-06-01" max="2021-12-24">
</section>
<section>
  <label for="return">Retour</label>
  <input type="date" id="return" name="return" min="2020-06-07" max="2021-12-31">
</section>
</section>

<section class="voyageur">
  <label for="voyageur">Nombre de voyageurs</label>
  <input id="voyageur" type="number" placeholder="Nombre de personnes" min="1" max="15" required onclick = "changePrix()">
</section>

<section>
  <article id="po"><span id="spanPO">0</span> <img src="https://vignette.wikia.nocookie.net/paradisebay/images/1/10/Gold.png/revision/latest?cb=20170612200026&path-prefix=fr" alt="pièce d'or"></article>
</section>

<section class="button">
  <button type="button" class="btn btn-secondary btn-lg btn-block">Réservez</button>
</section>

</section>


<?php include('_footer.html'); ?>