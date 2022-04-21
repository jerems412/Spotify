<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - Web Player</title>
    <!-- Liens -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.svg" type="image/icon svg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/fontawesome/css/all.css">
</head>

<body style="background: rgb(30 30 30);">
    <div class="container" id="container">
        <section class="menu" style="background:black;">
            <div class="logo">
                <span><i class="fab fa-spotify"></i>
                    <p>Spotify</p>
                </span>
            </div>
            <div class="liensMenu">
                <ul>
                    <li><a href="<?php echo $url; ?>SpaceUser/SpaceUser" style="color:white;"><i class="fa-solid fa-house"></i>&nbsp&nbsp&nbspHome</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/Search"><i class="fa-solid fa-magnifying-glass"></i>&nbsp&nbsp&nbspSearch</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/Playlists"><i class="fa-solid fa-book-open"></i>&nbsp&nbsp&nbspYour Library</a></li>
                </ul>
            </div><br>
            <div class="other">
                <ul>
                    <li><a href="<?php echo $url; ?>SpaceUser/AddPlaylist"><i class="fa-solid fa-square-plus"></i>&nbsp&nbsp&nbspCreate Playlist</a></li>
                    <li><a href="<?php echo $url; ?>SpaceUser/LikedSongs"><i class="fa-solid fa-heart"></i>&nbsp&nbsp&nbspLiked Songs</a></li>
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
                <span style="cursor:no-drop"><i class="fa-solid fa-chevron-left"></i></span>
                <span id="avancer"><i class="fa-solid fa-chevron-right"></i></span>
                <a href="#">UPGRADE</a>
                <button id="account"><i class="fa-solid fa-circle-user" style="color:#b3b3b3;font-size:20px;"></i>&nbsp&nbsp<?php echo $_SESSION['userConnecter']['profilNameUser']; ?>&nbsp<i class="fa-solid fa-caret-down"></i></button>
            </nav><br><br><br>
            <div class="content1">
                <div class="recent">
                    <h1>Recently played</h1>
                    <div class="list">
                        <?php
                        foreach ($_SESSION['recentMusiques'] as $value) {
                        ?>
                            <a onclick="playSong(<?php echo $value['id']; ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['titre'])>=14){echo substr($value['titre'],0,12)."...";}else{echo $value['titre'];} ?></h4>
                                <p><?php echo $value['nameArtist']; ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="recent">
                    <h1>Popular new releases</h1>
                    <div class="list">
                        <?php
                        foreach ($_SESSION['PopularMusic'] as $value) {
                        ?>
                            <a onclick="playSong(<?php echo $value['id']; ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['titre'])>=14){echo substr($value['titre'],0,12)."...";}else{echo $value['titre'];} ?></h4>
                                <p><?php echo $value['nameArtist']; ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="recent">
                    <h1>Recommended for today</h1>
                    <h1 style="font-weight: 100px;font-size:13px;color:#b3b3b3;margin-top: -1%;">Inspired by your recent activity.</h1>
                    <div class="list">
                        <?php
                        foreach ($_SESSION['listMusique'] as $value) {
                        ?>
                            <a onclick="playSong(<?php echo $value['id']; ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['titre'])>=14){echo substr($value['titre'],0,12)."...";}else{echo $value['titre'];} ?></h4>
                                <p><?php echo $value['nameArtist']; ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="recent">
                    <h1>Spotify Playlists</h1>
                    <div class="list">
                        <?php
                        foreach($_SESSION['spotifyPlaylist'] as $value) {
                        ?>
                            <a onclick="linkSpacePlaylistSpotify(<?php echo $value['id'];?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['namePlaylist'])>=16){echo substr($value['namePlaylist'],0,14)."...";}else{echo $value['namePlaylist'];} ?></h4>
                                <p><?php if(strlen($value['description'])>=18){echo substr($value['description'],0,16)."...";}else{echo $value['description'];} ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="recent">
                    <h1>Popular album</h1>
                    <div class="list">
                        <?php
                        foreach ($_SESSION['PopularAlbums'] as $value) {
                        ?>
                            <a onclick="linkSpaceAlbum(<?php echo $value['id'] ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt=""><br>
                                <h4><?php if(strlen($value['nameAlbum'])>=16){echo substr($value['nameAlbum'],0,14)."...";}else{echo $value['nameAlbum'];} ?></h4>
                                <p><?php echo $value['nameArtist'] ?></p>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="recent">
                    <h1>Popular Artist</h1>
                    <div class="list">
                        <?php
                        foreach($_SESSION['PopularAtists'] as $value) {
                        ?>
                            <a onclick="linkSpaceArtist(<?php echo $value['id'] ?>)">
                                <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt="" style="border-radius: 100px;"><br>
                                <h4><?php echo $value['nameArtist']; ?></h4>
                                <p></p>
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