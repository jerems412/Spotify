<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telechargement Windows - Spotify</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="<?php echo $url; ?>public/Home/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" style="background:#2c2c2c;">
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
        <div class="part1" style="background:rgb(25, 230, 140);">
            <div class="content">
                <img src="<?php echo $url; ?>public/Home/img/computer.svg" alt="">
                <h1>Télécharger Spotify</h1>
                <p>Écoutez des millions de titres et de podcasts sur votre appareil.</p>
                <a href="<?php echo $url; ?>public/SpotifySetup.exe">Télécharger</a>
            </div>
        </div>
        <div class="part2" style="background:white;">
            <div class="content">
                <div class="haut">
                    <h3>Écoutez aussi votre musique sur votre mobile et votre tablette.</h3>
                    <p>Écouter sur votre téléphone ou votre tablette est gratuit, facile et amusant.</p>
                </div>
                <br>
                <div class="bas">
                    <img src="<?php echo $url; ?>public/Home/img/app-store.svg" alt="Télécharger sur l'App&nbsp;Store">
                    <img src="<?php echo $url; ?>public/Home/img/google-play.svg" alt="Télécharger sur Google&nbsp;Play" style="margin: -8px; height: 57px;">
                    <img src="<?php echo $url; ?>public/Home/img/microsoft.png" alt="Télécharger via Microsoft">
                </div>
            </div>
        </div>
        <div class="part3" style="background:#2c2c2c;">
            <div class="content">
                <img src="<?php echo $url; ?>public/Home/img/part3.svg" alt="devices">
                <h3>Un compte pour écouter partout.</h3>
                <ul>
                    <li>MOBILE</li>
                    <li>ORDINATEUR</li>
                    <li>TABLETTE</li>
                    <li><a href="#">VOITURE</a></li>
                    <li><a href="#">PLAYSTATION®</a></li>
                    <li><a href="#">XBOX</a></li>
                    <li><a href="#">TÉLÉVISION</a></li>
                    <li><a href="#">ENCEINTE</a></li>
                    <li><a href="#">LECTEUR WEB</a></li>
                </ul>
            </div>
        </div>
        <?php
        require_once "src/view/Home/footer.php";
        ?>
    </div>
</body>

</html>