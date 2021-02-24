<?php session_start();
//ajouter un cookie
    setcookie('pseudo','didier',time() + (30*24*3600)); //cookie de 1mois
    //setcookie('id',18,time() + 60);
//    var_dump($_COOKIE);

//verification existance d'un cookie
    if(isset($_cookie['pseudo']))
    {
        echo "l'element existe bien" . $_COOKIE['pseudo'];
    }else{
        echo "l'element n'existe pas";
    }
        //echo "id: " . $_COOKIE['id'];


//supprimer un cookie
    //setcookie('pseudo','',time());
    //var_dump($_COOKIE);*

//cookie specifique
   // echo "id: " . $_COOKIE['id'];

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,900;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/articles.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link href="public/img/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <title>Connexion </title>
</head>

<body>
<div id="main">
    <div class="header header_home-otherpage">
        <div class="header_texture"></div>
        <div class="header_mask">
            <svg width="100%" height="100% "viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
            </svg>
        </div>

        <div class="container">

            <?php
            include('inc/navbar.php');
            ?>

            <div class="header_slogan">
                <h1 class="header_slogan--title">Une experience unique</h1>
                <a href="" class="btn">Trouvez le commerce de votre ville</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="form">
            <div class="form_connexion">
            <div class="form_title">Connexion</div>

            <?php
            include "inc/database.php";
            global $db;
            ?>

            <form class="form_inner" action="" method="POST">

                <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Pseudo</h4>
                        <input class="form_input"
                               type="text"
                               name="lpseudo"
                               id="lpseudo"
                               placeholder= "ex: Nemo"
                               required>
                    </div>
                </div>

                <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Mot de passe</h4>
                        <input class="form_input"
                               type="password"
                               name="lpassword"
                               id="lpassword"
                               placeholder="Votre mot de passe"
                               required>
                    </div>
                </div>
                <button class="btn"
                        type="submit"
                        name="formlogin"
                        id="formlogin"
                        value="Login"
                          >Se connecter</button>
            </form>

                <?php
                    include "inc/login.php";
                ?>
        </div>
        </div>
    </div>

    <div>
        <?php
            include "inc/footer.php";
        ?>
    </div>
</div>



        <?php

        /*$_SESSION //savoir s'il est bien connecté sur le compte car les é variables de session existe*/

        echo "bienvenue sur votre profil";
       if(isset($_SESSION['pseudo']) && (isset($_SESSION['email']) && (isset($_SESSION['date'] ))))
        {
            ?>
                <p>votre pseudo :<?= $_SESSION['pseudo'];  ?> </p>
            <p>Votre email : <?=$_SESSION['email']; ?> </p>
            <p>Votre date : <?=$_SESSION['date']; ?> </p>
            <?php
        }else{
            echo "veuillez vous connectez à votre compte";
        }
       ?>



<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="public/js/app.js"></script>

</body>
</html>