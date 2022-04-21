<?php
//index 
session_start();
require_once "config/autoload.php";

require_once "src/controller/SpaceUserController.php";
require_once "src/controller/HomeController.php";
require_once "src/controller/AuthentificationController.php";
use libs\system\Bootstrap;
$home = new Bootstrap();


/*
Insert musics and albums into data base
$tab = [
    ['name'=> 'Pas touche', 'id'=>0],
    ['name'=> 'Pas touche', 'id'=>0],
    ['name'=> 'Face Your Fear', 'id'=>120],
    ['name'=> 'American Love Call', 'id'=>121],
    ['name'=> 'Black Boy', 'id'=>122],
    ['name'=> 'Good To You', 'id'=>123],
    ['name'=> 'Queen Alone', 'id'=>124],
    ['name'=> 'It Rain Love', 'id'=>125],
    ['name'=> "Big Crown Vault Vol.1", 'id'=>125],
    ['name'=> "I'll Be Fine", 'id'=>126],
    ['name'=> 'It\'s Only Us', 'id'=>127],
    ['name'=> 'Sunday Morning', 'id'=>129],
];

$duree = [
    0=>'2:57',
    1=>'3:20',
    2=>'4:03',
    3=>'2:38',
    4=>'2:17',
    5=>'3:49',
    6=>'2:40',
    7=>'2:47',
    8=>'7:16',
    9=>'3:49',
];

$musiques = scandir('musics/Soul');

foreach ($tab as $value) {
    if($value['id'] != 0)
    {
        //$home -> add1($value['name'],$value['id']);
    }
}
$cpt = 0;
$cpt1 = 126;
$cpt2 = 0;
foreach ($musiques as $value) {
    if($tab[$cpt]['id'] != 0){
        $home -> add(substr($value,0,-4),$tab[$cpt]['id'],$cpt1,12,$duree[$cpt2]);
        echo substr($value,0,-4);
        echo "<br>";
        $cpt1++;
        $cpt2++;
    }
    $cpt++;
}
*/