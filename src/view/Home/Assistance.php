<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Spotify</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="<?php echo $url; ?>public/Home/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
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
        <div class="part1Assistance" style="background:#0c67d3;background-image: url(public/Home/img/search-desktop.webp);background-size: cover;">
            <div class="content">
                <h1>Que pouvons-nous faire <br> pour vous ?</h1>
                <input type="text" name="search" id="" placeholder="Rechercher">
                <div class="list">
                    <dl class="L1">
                        <dt>CONNEXION</dt>
                        <dd>R??initialisation du mot de <br> passe impossible</dd>
                    </dl>
                    <dl class="L2">
                        <dt>R??SOLUTION DES PROBL??MES</dt>
                        <dd>Mon compte n'a pas l'air <br> d'??tre le bon</dd>
                    </dl>
                    <dl class="L3">
                        <dt>CONNEXION</dt>
                        <dd>J'ai oubli?? mes identifiants</dd>
                    </dl>
                    <dl class="L4">
                        <dt>ABONNEMENTS DISPONIBLES</dt>
                        <dd>D??marrer ou rejoindre un <br> abonnement Famille</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="part2Assistance" style="background:#dedede;">
            <div class="content">
                <div class="list1">
                    <dl class="L1">
                        <dt><h3>Aide relative aux paiements</h3></dt>
                        <dd>G??rer les paiements</dd>
                        <dd>Modes de paiement</dd>
                        <dd>Aide relative ?? la facturation</dd>
                    </dl>
                    <dl class="L2">
                        <dt><h3>Aide relative aux abonnements</h3></dt>
                        <dd>Abonnements disponibles</dd>
                        <dd>Pr??f??rences d'abonnement</dd>
                        <dd>Premium Famille et Spotify Kids</dd>
                        <dd>Premium Duo</dd>
                        <dd>Premium ??tudiants</dd>
                    </dl>
                    <dl class="L3">
                        <dt><h3>Aide relative ?? l'appli</h3></dt>
                        <dd>Pr??f??rences de l'appli</dd>
                        <dd>R??solution des probl??mes</dd>
                        <dd>Playlists</dd>
                        <dd>Fonctionnalit??s</dd>
                        <dd>Fonctionnalit??s de partage</dd>
                        <dd>Assistants vocaux</dd>
                    </dl>
                </div>
                <div class="list2">
                    <dl class="L1">
                        <dt><h3>Aide relative aux appareils</h3></dt>
                        <dd>Enceintes</dd>
                        <dd>Montres intelligentes</dd>
                        <dd>TV</dd>
                        <dd>Gaming</dd>
                        <dd>Voitures</dd>
                    </dl>
                    <dl class="L2">
                        <dt><h3>Donn??es et confidentialit??</h3></dt>
                        <dd>Confidentialit?? d'??coute</dd>
                        <dd>Informations relatives aux <br> donn??es et ?? la confidentialit??</dd>
                    </dl>
                    <dl class="L3">
                        <dt><h3>Aide relative aux comptes</h3></dt>
                        <dd>Connexion</dd>
                        <dd>Aide relative au profil</dd>
                        <dd>Param??tres du compte</dd>
                        <dd>S??curit??</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="part3Assistance" style="background:white;">
            <div class="content">
                <h1>Consultez la communaut??</h1>
                <p>Vous avez des questions ? Trouvez une r??ponse aupr??s de <br> notre communaut?? mondiale de fans experts !</p>
                <a href="#">Trouver des r??ponses</a>
            </div>
        </div>
        <?php
        require_once "src/view/Home/footer.php";
        ?>
    </div>
</body>

</html>