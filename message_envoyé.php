<?php include('_header.html');
?>
<div>
    <article class="message_recu">
        Merci <?php echo $_GET['genre'] . ' ' . $_GET['Nom'] . ' ' . $_GET['Prenom'] ?> pour votre message. <br> Un conseiller vous répondra à votre adresse "<?php echo $_GET['Email'] ?>" dans les plus bref delai pour répondre à votre message : <br>
        <?php echo $_GET['Message'] ?>
    </article>
</div>

<?php include ('_footer.html')?>