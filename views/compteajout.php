
<form method="POST" action="index.php?action=traitementform">
<p><input type="text" name="prenom" placeholder="prenom" value="">
</p> <p><input type="text" name="nom" placeholder="nom" value="">
</p> <p><input type="email" name="email" placeholder="email" value="">

<?php if($action == 'traitementform') { ?>
    <p><input type="password" name="pwd" placeholder="Saisissez votre password"></p>
    <p><input type="password" name="verifpwd" placeholder="Saisissez à nouveau votre password"></p>
<?php } ?>

<p><button type="submit" class="success button">Envoyer mon formulaire</button></p>
</form>

