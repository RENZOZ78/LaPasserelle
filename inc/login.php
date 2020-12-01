<?php
//include "../connexion.php";


    //verification que formlogin envoyé
    if(isset($_POST['formlogin'])) {
        extract($_POST); //eviter de repeter "exctratct($_POST)

        if (!empty($lpseudo) && !empty($lpassword)) {
            //preparation de la requete
            $q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");

            //execution dela requete
            $q->execute([
                'pseudo' => $lpseudo  ]);
            $result = $q->fetch(); //resultat = renvoie de $q sous forme de tableau

            //verification du resultat et affichaege du contenu de la requete
            //var_dump($result);

            //si le resultat est vrai = si le pseudo= pseudo de la bd
            if ($result == true)
            {

                //le compte existe bien
                //$hashpassword = $result[password];
                //if (password_verify($lpassword, $hashpassword))
                if (password_verify($lpassword, $result['password'])) {
                    echo "Le mot de passe est bon, connection en cours !!";

                    $_SESSION['pseudo'] = $result['pseudo'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['date'] = $result['date'];

//session_unset();
//session_destroy();

                }else {
                    echo "le mot de passe n'est pas correct";
                }

            } else{
                echo "Le compte portant le pseudo "   . $lpseudo . " n'existe pas";
            }

        } else {
            echo "Veuillez completer l'ensemble des champs";
        }
    }


