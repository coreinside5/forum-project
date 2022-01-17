<?php require 'includes/header.php' ?>
<section>    
        <h1>Formulaire d'identification</h1>
    
        <form action="loginController.php" method="post">
            Votre login : <input type="text" name="login">
            <br />
            Votre mot de passé : <input type="password" name="pwd">
            <br />
            <input type="submit" value="Connexion">
        </form>
        <p><a href="index.php?action=posts">Back to homepage</a></p>
</section>
<?php require 'includes/footer.php' ?>