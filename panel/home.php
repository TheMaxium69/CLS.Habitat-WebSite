<?php include "app.php"; navbar(1); ?>

<main>


    <?php
    echo "Page -> Home";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    ?>


    <h1 style="text-align: center">Bienvenue <?php echo $_SESSION['userNameLog']?></h1>
    <br>



<hr>

<div style="text-align: center">
    <p>Pour Modifier les informations générals du site</p>
    <a class="btn btn-success" href="general.php">Général</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour Modifier/Ajouter/Supprimer des des utilisateur ayant acces à ce panel</p>
    <a class="btn btn-success" href="user.php">User</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour Modifier tout le text du site</p>
    <a class="btn btn-success" href="text.php">Text</a>
</div>

<br>

<div style="text-align: center">
    <p>Pour consulter toute les prise de contact des utilisateur</p>
    <a class="btn btn-success" href="contact.php">Contact</a>
</div>









</main>


</body> </html>