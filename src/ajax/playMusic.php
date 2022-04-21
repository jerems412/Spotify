<?php

if (isset($_GET['idMusique'])) {
    foreach ($_SESSION['listMusique'] as $value) {
        if($value['id'] == $_GET['idMusique']) {
            $_SESSION['ecoute'] = $value;
            require_once "src/controller/SpaceUserController.php";
            $home1 = new SpaceUserController;
            $home1 -> addEcoute($_GET['idMusique']);
            $svg = $home1->lastEcoute();
            if($svg){
                foreach ($_SESSION['listMusique'] as $value) {
                    if ($value['id'] == $svg['id_musique']) {
                        $_SESSION['ecoute'] = $value;
                    }
                }
            }else{
                $_SESSION['ecoute'] = $_SESSION['listMusique'][rand(1,100)];
            }
            $_SESSION['like'] = $home1 -> ExistLike($_SESSION['userConnecter']['id'],$_SESSION['ecoute']['id']);
        }
    }
}


//like
if (isset($_GET['idLike'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    if($_SESSION['like']) {
        $home1 -> dislike($_GET['idLike']);
        $_SESSION['like'] = $home1 -> ExistLike($_SESSION['userConnecter']['id'],$_SESSION['ecoute']['id']);
    }else{
        $home1 -> addLike($_GET['idLike']);
        $_SESSION['like'] = $home1 -> ExistLike($_SESSION['userConnecter']['id'],$_SESSION['ecoute']['id']);
    }
}

//next
if (isset($_GET['idNext'])) {
    $_SESSION['precedent'] = $_SESSION['ecoute'];
    if(count($_SESSION['listMusique']) > 0)
    {
        $_SESSION['ecoute'] = $_SESSION['listMusique'][rand(0,count($_SESSION['listMusique'])-1)];
    }
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1->addEcoute($_SESSION['ecoute']['id']);
    $_SESSION['like'] = $home1->ExistLike($_SESSION['userConnecter']['id'], $_SESSION['ecoute']['id']);
}

//prev
if (isset($_GET['idPreview'])) {
    if(count($_SESSION['listMusique']) > 0)
    {
        $_SESSION['ecoute'] = $_SESSION['precedent'];
    }
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1->addEcoute($_SESSION['ecoute']['id']);
    $_SESSION['like'] = $home1->ExistLike($_SESSION['userConnecter']['id'], $_SESSION['ecoute']['id']);
}

//link space Album
if (isset($_GET['idSpaceAlbum'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $_SESSION['SpaceAlbum'] = $home1->listAlbum1($_GET['idSpaceAlbum']);
    $_SESSION['listMusiqueSpaceAlbum'] = $home1 -> listMusicAlbum($_SESSION['SpaceAlbum']['id']);
}


//link space Artist
if (isset($_GET['idSpaceArtist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $_SESSION['SpaceArtist'] = $home1->listArtist1($_GET['idSpaceArtist']);
    $_SESSION['listMusiqueSpaceArtist'] = $home1 -> listPopularMusicArtist($_SESSION['SpaceArtist']['id']);
}

//link space Genre
if (isset($_GET['idGenre'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $_SESSION['Genre'] = $home1->listCategorie1($_GET['idGenre']);
}

//link space SpacePlaylistSpotify
if (isset($_GET['idSpacePlaylistSpotify'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $_SESSION['SpacePlaylistSpotify'] = $home1->spotifyPlaylist2($_GET['idSpacePlaylistSpotify']);
}

//link space SpacePlaylist
if (isset($_GET['idSpacePlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $_SESSION['SpacePlaylist'] = $home1->Playlist2($_GET['idSpacePlaylist']);
}

//like Album
if (isset($_GET['idLikeAlbum'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    if($_SESSION['likeAlbum']) {
        $home1 -> dislikeAlbum($_GET['idLikeAlbum']);
        $_SESSION['likeAlbum'] = $home1 -> ExistLikeAlbum($_SESSION['userConnecter']['id'],$_GET['idLikeAlbum']);
    }else{
        $home1 -> addLikeAlbum($_GET['idLikeAlbum']);
        $_SESSION['likeAlbum'] = $home1 -> ExistLikeAlbum($_SESSION['userConnecter']['id'],$_GET['idLikeAlbum']);
    }
}

//like playlist
if (isset($_GET['idLikePlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    if($_SESSION['likePlaylist']) {
        $home1 -> dislikePlaylist($_GET['idLikePlaylist']);
        $_SESSION['likePlaylist'] = $home1 -> ExistLikePlaylist($_SESSION['userConnecter']['id'],$_GET['idLikePlaylist']);
    }else{
        $home1 -> addLikePlaylist($_GET['idLikePlaylist']);
        $_SESSION['likePlaylist'] = $home1 -> ExistLikePlaylist($_SESSION['userConnecter']['id'],$_GET['idLikePlaylist']);
    }
}

//like playlist
if (isset($_GET['idFollow'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    if($_SESSION['follow']) {
        $home1 -> deleteAbonnement($_GET['idFollow']);
        $_SESSION['follow'] = $home1 -> ExistAbonnement($_SESSION['userConnecter']['id'],$_GET['idFollow']);
    }else{
        $home1 -> addAbonnement($_GET['idFollow']);
        $_SESSION['follow'] = $home1 -> ExistAbonnement($_SESSION['userConnecter']['id'],$_GET['idFollow']);
    }
}

//delete playlist
if (isset($_GET['idDeletePlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1 -> deletePlaylist($_SESSION['userConnecter']['id'],$_GET['idDeletePlaylist']);
}

//delete playlist
if (isset($_GET['idDeleteMusicPlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1 -> deleteMusicPlaylist($_GET['idDeleteMusicPlaylist'],$_SESSION['SpacePlaylist']['id']);
}

//ajout music playlist
if (isset($_GET['idAjoutMusicPlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1 -> ajoutMusicPlaylist($_GET['idAjoutMusicPlaylist'],$_SESSION['SpacePlaylist']['id']);
}

//add search
if (isset($_GET['addValSearch'])) {
    if($_GET['addValSearch'] != ""){
        require_once "src/controller/SpaceUserController.php";
        $home1 = new SpaceUserController;
        $home1->addSearch($_GET['addValSearch']);
    }
}

//update name playlist
if (isset($_GET['updateNamePlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1 -> updateNamePlaylist($_SESSION['SpacePlaylist']['id'],$_GET['updateNamePlaylist']);
}

//update description playlist
if (isset($_GET['updateDescriptionPlaylist'])) {
    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController;
    $home1 -> updateDescriptionPlaylist($_SESSION['SpacePlaylist']['id'],$_GET['updateDescriptionPlaylist']);
}



?>