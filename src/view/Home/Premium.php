<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Premium - Spotify(SN)</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="<?php echo $url; ?>public/Home/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" style="background:black;">
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
        <div class="part1Premium">
            <div class="content">
                <div class="part1">
                    <h1>Passez à Premium gratuitement pendant <br> 1 mois.</h1>
                    <p>Prenez le contrôle de votre bande-son avec la musique sans pub. Seulement 9,99 € après la période de <br> l'offre*. Vous pouvez annuler à tout moment.</p>
                </div>
                <div class="part2">
                    <a href="#" style="background:white;">OBTENIR 1 MOIS GRATUIT</a>
                    <a href="#" style="background:black;color:white;">VOIR LES ABONNEMENTS</a>
                </div>
                <div class="part3">
                    <p>* Réservé aux utilisateurs n'ayant jamais utilisé Premium. <a href="">Offre soumise à nos Conditions générales.</a></p>
                </div>
            </div>
        </div>
        <div class="part2Premium">
            <div class="content">
                <div class="gauche">
                    <h2>Écouter, ça change tout. Profitez de :</h2>
                    <ul>
                        <li>82 millions de titres</li>
                        <li>3,6 millions de podcasts</li>
                    </ul>
                    <p>Pas besoin de carte de crédit.</p>
                </div>
                <div class="droite">
                    <img src="<?php echo $url; ?>public/Home/img/variant-3-benefit.png" alt="">
                </div>
            </div>
        </div>
        <div class="part3Premium">
            <div class="content">
            <div class="droite">
                    <img class="benefit-2-logo" src="<?php echo $url; ?>public/Home/img/premium.png">
                    <h2>Prenez le contrôle de votre musique en passant à Premium.</h2>
                    <ul>
                        <li>Bénéficiez d'une meilleure qualité sonore.</li>
                        <li>Profitez de votre musique non-stop, sans pub.</li>
                        <li>éléchargez, et le tour est joué. Emportez votre musique, vos playlists et vos podcasts partout, sans Wi-Fi.</li>
                    </ul>
                    <p>Fini les distractions. Premium n'inclut que les bonnes ondes.</p>
                </div>
                <div class="gauche">
                    <img src="<?php echo $url; ?>public/Home/img/benefits-variant2-image-stacked.png" alt="">
                </div>
            </div>
        </div>
        <div class="part4Premium">
            <div class="content">
                <h1>Choisissez votre offre Spotify Premium</h1>
                <h3>Écoutez sans limites sur votre téléphone, votre enceinte et d'autres appareils.</h3>
                <img src="<?php echo $url; ?>public/Home/img/table.png" alt="">
            </div>
        </div>
        <?php
        require_once "src/view/Home/footer.php";
        ?>
    </div>
</body>

</html>
