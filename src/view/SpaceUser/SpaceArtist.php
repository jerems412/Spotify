<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - <?php echo $_SESSION['SpaceArtist']['nameArtist']; ?></title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/fontawesome/css/all.css">
</head>

<body style="background:rgb(30 30 30);">
    <div class="container">
        <section class="menu" style="background:black;">
            <div class="logo">
                <span><i class="fab fa-spotify"></i>
                    <p>Spotify</p>
                </span>
            </div>
            <div class="liensMenu">
                <ul>
                    <li><a href="<?php echo $url; ?>SpaceUser/SpaceUser"><i class="fa-solid fa-house"></i>&nbsp&nbsp&nbspHome</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/Search"><i class="fa-solid fa-magnifying-glass"></i>&nbsp&nbsp&nbspSearch</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/Playlists"><i class="fa-solid fa-book-open"></i>&nbsp&nbsp&nbspYour Library</a></li>
                </ul>
            </div><br>
            <div class="other">
                <ul>
                    <li><a href="<?php echo $url; ?>SpaceUser/AddPlaylist"><i class="fa-solid fa-square-plus"></i>&nbsp&nbsp&nbspCreate Playlist</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/likedSongs"><i class="fa-solid fa-heart"></i>&nbsp&nbsp&nbspLiked Songs</a></li>
                </ul>
            </div>
            <hr>
            <br><br><br><br><br><br><br><br><br><br>
            <div class="other">
                <ul>
                    <li><a href="<?php echo $url; ?>public/SpotifySetup.exe"><i class="fa-solid fa-circle-arrow-down"></i>&nbsp&nbsp&nbspInstall App</a></li>
                </ul>
            </div>
        </section>
        <section class="content">
            <nav>
                <span><i class="fa-solid fa-chevron-left"></i></span>
                <span id="avancer"><i class="fa-solid fa-chevron-right"></i></span>
                <a href="#">UPGRADE</a>
                <button id="account"><i class="fa-solid fa-circle-user" style="color:#b3b3b3;font-size:20px;"></i>&nbsp&nbsp<?php echo $_SESSION['userConnecter']['profilNameUser']; ?>&nbsp<i class="fa-solid fa-caret-down"></i></button>
            </nav><br><br><br>
            <div class="content1">
                <div class="part1">
                    <ul style="margin-left: -7%;">
                        <li><i class="fa-solid fa-certificate" style="color:#3d91f4;font-size:20px;"></i>&nbsp&nbsp&nbspVerified Artist</li>
                        <li><?php echo $_SESSION['SpaceArtist']['nameArtist']; ?></li>
                        <li><?php echo $_SESSION['SpaceArtist']['nb']; ?> listener <span style="font-size:30px">.</span> <?php echo $_SESSION['SpaceArtist']['abo']; ?> Followers</li>
                    </ul>
                </div>
                <div class="part2" style="background: #181818;">
                    <table style="margin-left: -5%;">
                        <thead>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th style="font-size: 60px;min-width: 100px;"><i class="fa-solid fa-circle-play" style="color:#1ed760;" id="playA"></i>&nbsp</th>
                                <th><button id="buttonFollow" onclick="follow(<?php echo $_SESSION['SpaceArtist']['id']; ?>)"><?php if($_SESSION['follow']){echo "FOLLOWING";}else{echo "FOLLOW";} ?></button></th>
                            </tr>
                            <tr>
                                <th style="font-size: 22px;font-weight:600;color:white;">Popular</th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($_SESSION['listMusique'] as $value) {
                            ?>
                                <tr class="trMusique">
                                    <td style="border-radius: 4px 0 0 4px;">&nbsp&nbsp<span onclick="playSong(<?php echo $value['id']; ?>)"><i class="fa-solid fa-play" style="color:white;font-size:20px;"></i></span></td>
                                    <td style="min-width: 450px;text-align:left;"><?php echo $value['titre']; ?> <br>E</td>
                                    <td style="min-width: 200px;"><?php echo $value['nb']; ?></td>
                                    <td><i class="fa-solid fa-heart"></i></td>
                                    <td style="padding-right: 10px;text-align:center;border-radius: 0 4px 4px 0;">&nbsp&nbsp<?php echo $value['duree']; ?></td>
                                </tr>
                            <?php
                            $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="recent" style="margin-left: 0;">
                    <h1>Albums</h1>
                    <div class="list">
                        <?php
                        foreach ($_SESSION['albums'] as $value) {
                        ?>
                            <a onclick="linkSpaceAlbum(<?php echo $value['id'] ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2,48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['nameAlbum'])>=16){echo substr($value['nameAlbum'],0,14)."...";}else{echo $value['nameAlbum'];} ?></h4>
                                <p><?php echo $_SESSION['SpaceArtist']['nameArtist'];?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once "src/view/SpaceUser/menu.php"; ?>
    </div>
    <?php require_once "src/view/SpaceUser/PlayMusic.php"; ?>
    <script src="<?php echo $url; ?>public/SpaceUser/js/menu.js"></script>
    <script src="<?php echo $url; ?>public/SpaceUser/ajax/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $url; ?>public/SpaceUser/ajax/playMusic.js"></script>
    <?php require_once "src/ajax/playMusic.php"; ?>
</body>

</html>