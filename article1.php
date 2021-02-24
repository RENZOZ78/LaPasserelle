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
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/article_view.css">

    <link href="public/img/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <title>La Passerelle</title>
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
                    <h1 class="header_slogan--title">THOMAS FUTZER</h1>
                    <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/index.php?_ijt=i858qhni7c3sf8ou8i4cf2ir6l" class="btn" > <i class="fa fa-chevron-left"></i> Revenir a l'acceuil</a>
                </div>

            </div>
        </div>
        <div class="article_view-container">
            <div class="article_view">
                <h2 class="article_view-title">Habillez-vous avec style</h2>
                <h3 class="article_view-subtitle"> Didier.B 8 novembre 2020</h3>
                <div class="article_view-content">
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae commodi ea laborum minus modi pariatur quisquam unde vero. Ab accusantium atque autem beatae blanditiis corporis culpa deserunt dolorem eaque, eius enim eos eum facere illo, ipsam laboriosam molestias necessitatibus officia porro possimus quam, quasi qui quo sapiente tempore totam veniam voluptatem? Alias architecto at aut autem distinctio, esse expedita facere ipsum laudantium libero magni, maiores quasi quidem, soluta unde voluptas voluptates voluptatibus. Ab aspernatur at dicta ducimus hic inventore, ipsam maxime neque nobis pariatur perspiciatis placeat, quo repellendus repudiandae veniam? Aliquid, commodi culpa dolore explicabo minima provident ut veritatis.</span>
                        <br>
                        <span>Aliquid asperiores autem consectetur consequuntur culpa dolore dolorem doloremque, dolores, doloribus eaque excepturi expedita fuga fugit illum ipsa iste maiores molestiae neque nobis nostrum nulla numquam odio officia officiis perspiciatis placeat porro quibusdam quis ratione recusandae rem repellendus saepe sequi similique sint voluptas voluptates? Consequatur dicta odit quibusdam recusandae. Adipisci alias aspernatur, consequuntur cupiditate dicta distinctio dolore, ea, eligendi enim ex excepturi expedita explicabo fuga hic id magni molestiae nam nemo non nostrum odit omnis perspiciatis possimus quia quo recusandae sapiente similique soluta suscipit tempore temporibus tenetur veniam voluptates? Accusamus ad aut earum illo illum ipsum minima officia optio perferendis.</span>
                    </p>
                </div>
            </div>

        </div>

        <?php
        include('inc/footer.php');
        ?>
    </div>


<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="public/js/app.js"></script>

</body>
</html>