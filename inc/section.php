<div class="section">
    <div class="articles">
        <div class="container">
            <h2 class="articles_title">Articles</h2>
            <div class="articles_items">



                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article1.php?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                       class="article"
                       style="background: url('public/img/img1.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">demarquez vous avec un style original</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article2.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img2.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">Les vêtements dont vous avez toujours révé</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article3.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img3.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">les meilleurs patisseries de la ville</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article3.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img3.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">les meilleurs patisseries de la ville</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article1.php?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img1.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">demarquez vous avec un style original</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article2.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img2.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">Les vêtements dont vous avez toujours révé</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article3.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img3.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">les meilleurs patisseries de la ville</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>
                <a href="http://localhost:63342/PROJET%20PERSO/LaPasserelle/article3.html?_ijt=i858qhni7c3sf8ou8i4cf2ir6l"
                   class="article"
                   style="background: url('public/img/img3.jpg');  background-size: cover;">
                    <div class="article_filter"></div>
                    <div class="article_name">les meilleurs patisseries de la ville</div>
                    <div class="article_icon"><i class="fa fa-play"></i></div>
                </a>

                <?php
                include('database.php');
                global $db;

                //REQUETE NORMALE
                /*$q = $db->query("SELECT * FROM USERS ORDER BY id DESC LIMIT 3");
                while ($user = $q->fetch()) {
                    var_dump($user);*/

                //REQUETE PREPAREE envoie de donnéés /Rq: l'ID  & DATE se mettent auto
                $q = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email,:password)");
                $q->execute([
                    'pseudo' =>  'fabriceffrrafra',
                    'email' => 'ferfe@gmail.com',
                    'password' => 'popofrfrrfr',
                ]);
                if(isset($_POST['formsend'])){

                    $pseudo = $_POST['pseudo'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                }
                ?>



            </div>
        </div>
    </div>
</div>