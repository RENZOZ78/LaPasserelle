<?php
if(isset($_POST['formsend'])){
    extract($_POST);

    //CONDITIONS CASE NON VIDES
    if(!empty($password) && !empty($cpassword) && !empty($email) && !empty($pseudo)) {

        if($password == $cpassword){
            $options = [
                'cost' => 12,
            ];
            //                        echo password_hash($password, PASSWORD_BCRYPT, $options) . "\n";
            //HASH POT DE PASS
            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

            include ('inc/database.php');
            global $db;

            //VERIFIER SI EMAIL DEJA EXISTANT?
            $c = $db->prepare("SELECT email FROM users WHERE email = :email");
            $c->execute([
                'email' => $email]);

            //compter le nb de resultat sur les resultats retournés? plusieurs meme email?
            $result = $c->rowCount();

            //REQUETE PREPARER INSERTION DONNEE BDD
            echo $result; //petit debug, pour bien aficher le message

            if($result == 0) {
                $q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo,:email,:password)");
                $q->execute([
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $hashpass
                ]);
                echo "le compte a été crée \n" ;
            }else {
                echo "un email existe déja \n";
            }


            //        if(password_verify($password, $hashpass)){
            //            echo "le mot de passe est le meme";
            //        } else{
            //            echo "le mot de passe n'est pas correct";
        } else {
            echo "Les champs ne sont pas tous remplis";
        }
    }}