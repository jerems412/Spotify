<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecouter, ca change tout - Spotify</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="<?php echo $url; ?>public/Home/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" style="background-image:url('public/Home/img/font-1.svg');background-color: rgb(41, 65, 171);background-size: 153%;background-position: center top 30%;background-repeat: no-repeat;background-size: 200%;">
        <div class="menu" style="background:black;">
            <nav>
            <span><a href="<?php echo $url; ?>Home/Home" style="text-decoration:none;color:White;"><i class="fab fa-spotify" style="font-size:40px"></i>Spotify</a></span>
                <ul>
                    <li><a href="<?php echo $url; ?>Home/Premium">Premium</a></li>
                    <li><a href="<?php echo $url; ?>Home/Assistance">Assistance</a></li>
                    <li><a href="<?php echo $url; ?>Home/Telecharger">Telecharger</a></li>
                    <li> | </li>
                    <li><a href="<?php echo $url; ?>Authentification/Sign_In">Inscription</a></li>
                    <li><a href="<?php echo $url; ?>Authentification/login">Connexion</a></li>
                </ul>
            </nav>
        </div>
        <div class="ecouter">
            <div class="content">
                <h1>Ecouter, ça <br>  &nbsp&nbsp&nbsp&nbsp change tout </h1>
                <h4>Des millions de titres et de podcasts. Aucune carte de crédit nécessaire.</h4>
                <a href="<?php echo $url; ?>public/SpotifySetup.exe">TÉLÉCHARGEZ SPOTIFY FREE</a>
            </div>
        </div>
        <?php
            require_once "src/view/Home/footer.php";
        ?>
    </div>
</body>
</html>