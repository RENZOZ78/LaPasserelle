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
    <link href="public/img/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <title>La Passerelle | Inscription</title>
</head>

<body>
<div class="header header_home-otherpage">
    <div class="header_texture"></div>
    <div class="header_mask">
        <svg width="100%" height="100% view"viewBox="0 0 100 100" preserveAspectRatio="none">
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
        <div class="form_title">Inscription</div>
        <form class="form_inner" action="">
            <div class="form_line">
                <div class="form_block">
                    <h4 class="form_label">Nom</h4>
                    <input class="form_input"  type="text">
                </div>
                <div class="form_block">
                    <h4 class="form_label">Email</h4>
                    <input class="form_input"  type="email">
                </div>
            </div>
            <div class="form_line">
                <div class="form_block">
                    <h4 class="form_label">Mot de passe</h4>
                    <input class="form_input"  type="text">
                </div>
                <div class="form_block">
                    <h4 class="form_label">Confirmation du mot de passe</h4>
                    <input class="form_input"  type="text">
                </div>
            </div>
            <button class="btn">S'inscrire</button>
        </form>
    </div>
</div>



<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="public/js/app.js"></script>

</body>
</html>