<?php
// Les parametres de connexions
define("SERVEUR","localhost");
define("DB_NAME","spotify");
define("USER","root");
define("PASSWORD",'');

// Definir le Domain Server Name(DSN)
$dsn = 'mysql:host='.SERVEUR.';dbname='.DB_NAME.';charset=utf8';
// Options de PDO pour la gestion des erreurs
$tabOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

// Création de l'instance PDO
try{
    $ds = new PDO($dsn,USER,PASSWORD);
}catch (PDOException $ex){
    die($ex ->getMessage());
}

//search Artist
if (isset($_GET['ValSearchArtist'])) {
    //list music
    $name = $_GET['ValSearchArtist'];
    $sql = "SELECT id,nameArtist FROM artistes WHERE nameArtist LIKE '%".$name."%'";
    $exe = $ds->query($sql);
    $tab = $exe->fetchAll();
    if (empty($tab)) {
        echo json_encode("0");
    } else {
        echo json_encode($tab);
    }
}

?>