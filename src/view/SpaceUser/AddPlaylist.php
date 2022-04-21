<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - <?php echo $_SESSION['SpacePlaylist']['namePlaylist']; ?></title>
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
                <span id="retour"><i class="fa-solid fa-chevron-left"></i></span>
                <span id="avancer"><i class="fa-solid fa-chevron-right"></i></span>
                <a href="#">UPGRADE</a>
                <button id="account"><i class="fa-solid fa-circle-user" style="color:#b3b3b3;font-size:20px;"></i>&nbsp&nbsp<?php echo $_SESSION['userConnecter']['profilNameUser']; ?>&nbsp<i class="fa-solid fa-caret-down"></i></button>
            </nav><br><br><br>
            <div class="content1">
                <div class="part1">
                    <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2,48); ?>.jpg" alt="" style="width:210px;height: 210px;">
                    <ul>
                        <li style="margin-bottom:1%;">PLAYLIST</li>
                        <li style="margin-bottom:1%;"><input style="background:transparent;border:0;outline:none;color:white;font-weight:bold;font-size: 80px;width:100%;" type="text" onblur="updateNamePlaylist(this)" value="<?php if(strlen($_SESSION['SpacePlaylist']['namePlaylist'])>=16){echo substr($_SESSION['SpacePlaylist']['namePlaylist'],0,14)."...";}else{echo $_SESSION['SpacePlaylist']['namePlaylist'];} ?>"></li>
                        <li><?php echo $_SESSION['userConnecter']['profilNameUser']; ?> <span style="font-size:30px">.</span> <input style="background:transparent;border:0;outline:none;color:white;font-weight:bold;font-size: 13px;width:90%;" type="text" onblur="updateDescriptionPlaylist(this)" placeholder="Description" value="<?php echo $_SESSION['SpacePlaylist']['description']; ?>"></li>
                    </ul>
                </div>
                <div class="part2" style="background: #121212;">
                    <table style="overflow: auto;height: 70vh;" id="tableAjoutmxp">
                        <tbody>
                            <tr>
                                <th style="font-size: 22px;color:White;font-weight:bold;">Recommended <br> </th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($_SESSION['list'] as $value) {
                            ?>
                                <tr class="trMusique" id="musicDelete<?php echo $value['idArtist'] ?>">
                                    <td style="border-radius: 4px 0 0 4px;">&nbsp&nbsp<span onclick="playSong(<?php echo $value['id']; ?>)"><i class="fa-solid fa-play" style="color:white;font-size:20px;"></i></span></td>
                                    <td style="min-width: 350px;text-align:left;;"><?php echo $value['titre']; ?> <br><a onclick="linkSpaceArtist(<?php echo $value['idArtist'] ?>)" style="cursor:pointer;"><?php echo $value['nameArtist']; ?></a></td>
                                    <td style="min-width: 290PX;"><a style="cursor:pointer;" onclick="linkSpaceAlbum(<?php echo $value['idAlbum'] ?>)"><?php echo $value['nameAlbum']; ?></a></td>
                                    <td style="padding-right: 10px;border-radius: 0 4px 4px 0;"><i class="fa-solid fa-circle-plus" style="color:white;cursor:pointer;" onclick="ajoutMusicPlaylist(<?php echo $value['id'] ?>)"></i></td>
                                </tr>
                            <?php
                            $i++;
                            }
                            ?>
                        </tbody>
                    </table>
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