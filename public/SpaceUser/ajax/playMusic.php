<?php

if (isset($_GET['idMusique'])) {
    foreach ($_SESSION['listMusique'] as $value) {
        if($value['id'] == $_GET['idMusique']) {
            $_SESSION['ecoute'] = $value;
        }
    }
    json_encode($_SESSION['listMusique']);
}
json_encode("jerems");

?>