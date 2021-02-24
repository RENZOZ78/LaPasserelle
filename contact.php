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
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/inscription.css">
    <link href="public/img/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <script src="pixi/pixi.min.js"></script>
    <title>La Passerelle | Contact</title>
</head>

<body>
<div id="main">
    <?php
    include ('inc/header.php')
    ?>
    <script type="text/javascript">
        const app = new PIXI.Application({
            width: 800, height: 600, backgroundColor: 0x1099bb, resolution: window.devicePixelRatio || 1,
        });
        document.body.appendChild(app.view);

        app.loader
            .add('bg_grass', 'examples/assets/bg_grass.jpg')
            .load(build);

        function build() {
            // Create a new texture
            const texture = app.loader.resources.bg_grass.texture;

            // Create the simple plane
            const verticesX = 10;
            const verticesY = 10;
            const plane = new PIXI.SimplePlane(texture, verticesX, verticesY);

            plane.x = 100;
            plane.y = 100;

            app.stage.addChild(plane);

            // Get the buffer for vertice positions.
            const buffer = plane.geometry.getBuffer('aVertexPosition');

            // Listen for animate update
            app.ticker.add((delta) => {
                // Randomize the vertice positions a bit to create movement.
                for (let i = 0; i < buffer.data.length; i++) {
                    buffer.data[i] += (Math.random() - 0.5);
                }
                buffer.update();
            });
        }
    </script>

    <?php
    include('inc/form_contact.php')
    ?>

    <?php
    include('inc/footer.php');
    ?>
</div>

<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="public/js/app.js"></script>

</body>
</html