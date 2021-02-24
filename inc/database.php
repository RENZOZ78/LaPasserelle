<?php
define('HOST', 'localhost');
define('DB_NAME', 'LaPasserelle');
define('USER', 'root');
define('PASS', '');

try
{
    $db = new PDO('mysql:host=' . HOST . ";dbname=" . DB_NAME, USER, PASS);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect > OK !";

} catch (PDOException $e) {
    echo $e;
}




//try {
//    $user = 'root';
//    $pass="";
//
//    $db = new PDO('mysql:host:localhost;dbname!LaPasserelle', $user, $pass);
//
//    foreach ($db->query('SELECT * FROM users') as $row) {
//        afficherInfo($row);
//        print_r($row);
//    }
//} catch (PDOException $e) {
//    print "Erreur :" . $e->getMessage() . "<br>/>";
//    die();
//}
//
//function afficherInfo($row){
//    echo $row['nom'];
//   echo $row['prenom'];
//}