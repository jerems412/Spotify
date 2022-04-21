<section class="playMusic" style="background: #181818;">
    <div class="gauchePM">
        <img src="<?php echo $url; ?>public/SpaceUser/img/bg<?php echo rand(2, 48); ?>.jpg" alt="">
        <ul>
            <li><?php echo $_SESSION['ecoute']['titre']; ?></li>
            <li style="cursor:pointer;" onclick="linkSpaceArtist(<?php echo $_SESSION['ecoute']['idArtist'] ?>)"><?php echo $_SESSION['ecoute']['nameArtist']; ?></li>
        </ul>
        <i class="fa-solid fa-heart" style="cursor:pointer;color:<?php if($_SESSION['like']){echo "#1ed760";}else{echo "white";} ?>;margin-left:15%;" id="like" onclick="likeSong(<?php echo $_SESSION['ecoute']['id']; ?>)"></i>
    </div>
    <div class="centerPM">
        <div class="hautPM">
            <i class="fa-solid fa-shuffle" style="color:#696969;font-size:18px;"></i>
            <i class="fa-solid fa-backward-step" style="color:#696969;font-size:22px;" onclick="prevSong(<?php echo $_SESSION['ecoute']['id']; ?>)"></i>
            <i class="fa-solid fa-circle-play" style="color:white;" id="play"></i>
            <i class="fa-solid fa-forward-step" style="color:#696969;font-size:22px;" onclick="nextSong(<?php echo $_SESSION['ecoute']['id']; ?>)"></i>
            <i class="fa-solid fa-repeat" style="color:#696969;font-size:18px;" id="repeat"></i>
        </div><br>
        <div class="basPM">
            <span id="curr_time">00:00</span>&nbsp
            <input type="range" name="" id="rangeM">
            &nbsp<span id="total_time"><?php echo $_SESSION['ecoute']['duree']; ?></span>
        </div>
    </div>
    <div class="droitePM">
        <i class="fa-solid fa-microphone" style="color:white;"></i>
        <i class="fa-solid fa-list" style="color:white;"></i>
        <i class="fa-solid fa-music" style="color:white;"></i>
        <i class="fa-solid fa-volume-low" style="color:white;" id="blockVolume"></i>
        <input type="range" name="" id="volume" min="0" max="1" step="0.1">
    </div>
    <audio src="<?php echo $url;?>public/musics/<?php echo $_SESSION['ecoute']['nameCategorie']."/".$_SESSION['ecoute']['titre']; ?>.mp3" id="music"  min="0" max="100" step="1"></audio>
</section>