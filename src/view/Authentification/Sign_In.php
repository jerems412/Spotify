<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - Spotify</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="<?php echo $url; ?>public/Authentification/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
        <h1 class="logo"><span><a href="<?php echo $url; ?>Home/Home" style="text-decoration:none;color:black;"><i class="fab fa-spotify" style="font-size:50px"></i>Spotify</a></span></h1>
            <h1>Inscrivez-vous gratuitement <br> pour lancer la lecture.</h2>
            <div class="sites">
                <a href="#" style="background:#4267B2;"><i class="fa fa-facebook" style="color:white;"></i> CONTINUONS AVEC FACEBOOK</a><br>
                <a href="#" style="border: 1px solid black;color:#919496;"><i class="fa fa-google"></i> CONTINUONS AVEC GOOGLE</a><br><br>
                <span>
                    <hr> &nbsp OU &nbsp
                    <hr>
                </span>
            </div>
            <div class="form">
                <form action="<?php echo $url; ?>Authentification/sign_up" method="post">
                    <h2>Inscrivez-vous avec votre adresse e-mail</h2>
                    <label for="">Quelle est votre adresse e-mail ?</label>
                    <input type="email" name="Email" id="" placeholder="Saisissez votre adresse e-mail." value="<?php if(isset($_SESSION['Email'])){echo $_SESSION['Email'];} ?>" required>
                    <?php if(isset($_SESSION['erreurEmail1'])){echo $_SESSION['erreurEmail1'];} ?>
                    <label for="">Confirmez votre adresse e-mail</label>
                    <input type="email" name="Email1" id="" placeholder="Saisissez de nouveau votre adresse e-mail." value="<?php if(isset($_SESSION['Email1'])){echo $_SESSION['Email1'];} ?>" required>
                    <?php if(isset($_SESSION['erreurEmail2'])){echo $_SESSION['erreurEmail2'];} ?>
                    <label for="">Cr??ez un mot de passe</label>
                    <input type="password" name="mdp" id="" minlength="4" placeholder="Creez un mot de passe." value="<?php if(isset($_SESSION['mdp'])){echo $_SESSION['mdp'];} ?>" required>
                    <label for="">Comment doit-on vous appeler ?</label>
                    <input type="text" name="name" id="" maxlength="10" placeholder="Saisissez un nom de profil." value="<?php if(isset($_SESSION['profil'])){echo $_SESSION['profil'];} ?>" required>
                    <label for="" style="font-weight: 100;">Celui-ci appara??t sur votre profil.</label>
                    <label for="" class="check">Quelle est votre date de naissance ?</label>
                    <input type="date" name="birth" id="" value="<?php if(isset($_SESSION['birth'])){echo $_SESSION['birth'];} ?>" required>
                    <label for="" class="check">Quel est votre sexe ?</label>
                    <div class="sexe">
                        <input type="radio" name="genre" id="Masculin" value="masculin">
                        <label for="Masculin" class="check" style="margin-top:3%;">Masculin</label>
                        <input type="radio" name="genre" id="Feminin" value="feminin">
                        <label for="Feminin" class="check" style="margin-top:3%;">Feminin</label>
                        <input type="radio" name="genre" id="Non-Binaire" value="non binaire">
                        <label for="Non-Binaire" class="check" style="margin-top:3%;">Non binaire</label>
                    </div>
                    <div class="sexe">
                        <input type="checkbox" name="accept" id="" required>
                        <label for="" class="check" style="font-size: 14px;font-weight: 100;margin-top: 1.8%;">J'accepte de recevoir des actualit??s et des offres de Spotify</label>
                    </div>
                    <div class="sexe">
                        <input type="checkbox" name="accptt" id="" style="width:88px">
                        <label for="" class="check" style="font-size: 14px;font-weight: 100;margin-top: 1.8%;">Partagez les donn??es sur mon inscription avec les fournisseurs de contenu de Spotify ?? des fins de marketing. Notez que vos donn??es peuvent ??tre transf??r??es vers des pays en dehors de l'Espace ??conomique europ??en, comme pr??cis?? dans notre Politique de confidentialit??.</label>
                    </div>
                    <p>En cliquant sur le bouton d'inscription, vous acceptez les <a href="#">Conditions g??n??rales d'utilisation de Spotify.</a></p>
                    <p>Pour en savoir plus sur la fa??on dont Spotify recueille, utilise, partage et prot??ge vos donn??es personnelles, veuillez consulter la <a href="#">Politique de confidentialit?? de Spotify.</a></p>
                    <div>
                        <input type="submit" value="S'INSCRIRE">
                    </div>
                    <p style="font-size: 16px;">Vous avez d??j?? un compte ? <a href="<?php echo $url; ?>Authentification/login" style="font-size: 16px;">Connectez-vous.</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>