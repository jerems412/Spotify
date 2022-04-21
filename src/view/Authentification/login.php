<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Spotify</title>
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
            <hr>
            <div class="sites">
                <?php if(isset($_SESSION['erreurAuth'])){echo $_SESSION['erreurAuth'];} ?>
                <a href="#" style="background:#4267B2;"><i class="fa fa-facebook" style="color:white;"></i> CONTINUONS AVEC FACEBOOK</a><br>
                <a href="#" style="background:black;"><i class="fa fa-apple"></i> CONTINUONS AVEC APPLE</a><br>
                <a href="#" style="border: 1px solid black;color:#919496;"><i class="fa fa-google"></i> CONTINUONS AVEC GOOGLE</a><br><br>
                <span>
                    <hr> &nbsp OU &nbsp
                    <hr>
                </span>
            </div>
            <div class="form">
                <form action="<?php echo $url; ?>Authentification/logon" method="post">
                    <label for="">Adresse email ou nom d'utilisateur</label>
                    <input type="text" name="iden"  placeholder="Adresse email ou nom d'utilisateur" value="<?php if(isset($_SESSION['userConnecter']["identifiantEmailUser"])){echo $_SESSION['userConnecter']["identifiantEmailUser"];} ?>">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp"  placeholder="Mot de passe" value="<?php if(isset($_SESSION['userConnecter']["mdpUser"])){echo $_SESSION['userConnecter']["mdpUser"];} ?>">
                    <label for=""><a href="#">Mot de passe oublie ?</a></label>
                    <div class="logDiv">
                        <input type="checkbox" name="" id="">
                        <label for="" class="check">Se souvenir de moi</label>
                        <input type="submit" value="SE CONNECTER">
                    </div>
                    <br><hr>
                    <h2>Vous n'avez pas de compte ?</h2>
                    <a href="<?php echo $url; ?>Authentification/Sign_In" class="jnp">JE N'AI PAS SPOTIFY</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>