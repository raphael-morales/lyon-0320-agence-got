 <?php include('_header.html');
 
 $errors = [];

 if (!empty($_POST)){
     if (empty($_POST['destination'])){
         $errors['destination'] = "veuillez selectionner une destination";
     }

     if (empty($_POST['start'])){
         $errors['start'] = "veuillez selectionner une date de départ";
     }

     if (empty($_POST['return'])){
         $errors['return'] = "veuillez selectionner une date d'arrivée";
     }

     if (empty($_POST['voyageur'])){
         $errors['voyageur'] = "veuillez selectionner le nombre de voyageurs";
     }


 }

 $options = [
         "value=\"\"" => 'Choisissez votre destination',
        "value=\"port_real\"" => 'Port Real',
        "value=\"winterfell\"" => 'Winterfell'
 ];

 ?>

  <h1 class="reservation">Formulaire de réservation</h1>

<section class="formulaire">
<form method="post" >
    <section class="destination">
      <label for="destination">Où?</label>
        <?php if (isset($errors['destination'])){ ?>
        <p><small class="erros"><?php echo $errors['destination'] ?></small></p>
        <?php } ?>

      <select class="select" name="destination" id="destination" onclick = "changePrix()">
          <?php foreach ($options as $values => $destinations){ ?>
              <option <?php echo $values ?>><?php echo $destinations ?></option>
          <?php } ?>
//


      </select>
    </section>



    <section class="date">
    <section>
      <label for="start">Départ</label>
        <?php if (isset($errors['start'])){ ?>
            <p><small class="erros"><?php echo $errors['start'] ?></small></p>
        <?php } ?>
      <input type="date" id="start" name="start" min="2020-06-01" max="2021-12-24">
    </section>
    <section>
      <label for="return">Retour</label>
        <?php if (isset($errors['return'])){ ?>
            <p><small class="erros"><?php echo $errors['return'] ?></small></p>
        <?php } ?>
      <input type="date" id="return" name="return" min="2020-06-07" max="2021-12-31">
    </section>
    </section>

    <section class="voyageur">
      <label for="voyageur">Nombre de voyageurs</label>
        <?php if (isset($errors['voyageur'])){ ?>
            <p><small class="erros"><?php echo $errors['voyageur'] ?></small></p>
        <?php } ?>
      <input id="voyageur" name="voyageur" type="number" placeholder="Nombre de personnes" min="1" max="15" required onclick = "changePrix()">
    </section>

    <section>
      <article id="po"><span id="spanPO">0</span> <img src="https://vignette.wikia.nocookie.net/paradisebay/images/1/10/Gold.png/revision/latest?cb=20170612200026&path-prefix=fr" alt="pièce d'or"></article>
    </section>

    <section class="button">
      <button type="submit" class="btn btn-secondary btn-lg btn-block">Réservez</button>
    </section>
</form>
    </section>


<?php include('_footer.html'); ?>