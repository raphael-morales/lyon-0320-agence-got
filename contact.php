 <?php include('_header.html'); ?>
    <main>
      <section class="coordonnées">
        <div class="adresse">
            <h2>Adresse</h2>
            <p>17 Rue Delandine, <br>69002 Lyon, France</p>
        </div>
        <div class="contact">
            <i id="phone" class="fa fa-phone" style="font-size:36px"></i>
            <h2>Contactez-nous</h2>
            <p>tèl: 04 78 58 46 15</p>
        </div>
      </section>
      <article class="texte">
        <div>
          <p>
            Un rêve, une detination, une activité... <br> Nous sommes la pour répondre a vos questions. Un doute sur votre prochain voyage? parlez nous en. Nous répondrons 
            au mieux à toutes vos intérrogations.
          </p>
        </div>
        <div>
          <p>
            N'hésitez pas à nous contactez par mail, téléphone ou de vous déplacez dans nos bureaux. nos conseiller serons la pour vous aiguillez dans vos projets.
          </p>
        </div>
      </article>
        <form>
            <h2>Contactez-nous</h2>
            <div id="fields-container">
              <div class="nom">
                <input type="text" placeholder="Nom" required>
                <input type="text" placeholder="Prenom" required>
              </div>
              <input type="email" placeholder="Email" required>
              <textarea placeholder="Message" rows="5"></textarea>
              <div class="button-container">
                <button type="submit">ENVOYER</button>
              </div>
            </div>
          </form>
        <div class="horaires">
            <p>Retrouvez nous dans nos bureau: <br> Du Lundi au Vendredi de 8h30 à 19h et Samedi 9h30 – 12h30 </p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2421506637907!2d4.824980115869721!3d45.7462911791052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ac9e1fd2f%3A0xabc36e768b27c9a0!2sWild%20Code%20School%20-%20Formation%20d%C3%A9veloppeur%20web%20%26%20data%20analyst!5e0!3m2!1sfr!2sfr!4v1584010498999!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </main>

 <?php include('_footer.html') ?>


