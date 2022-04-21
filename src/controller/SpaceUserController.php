<?php
use libs\system\Controller;
use src\model\CategorieDB;
use src\model\MusiqueDB;
use src\model\EcouteDB;
use src\model\LikeDB;
use src\model\AlbumDB;
use src\model\ArtisteDB;
use src\model\PlaylistDB;
use src\model\AbonnementDB;
use src\model\UserDB;

class SpaceUserController extends Controller
{
    private $cat;
    private $music;
    private $ecoute;
    private $like;
    private $album;
    private $artist;
    private $playlist;
    private $abonnement;
    private $user;
    public function __construct() {
        parent::__construct();
        $this -> cat = new CategorieDB();
        $this -> music = new MusiqueDB();
        $this -> ecoute = new EcouteDB();
        $this -> like = new LikeDB();
        $this -> album = new AlbumDB();
        $this -> artist = new ArtisteDB();
        $this -> playlist = new PlaylistDB();
        $this -> abonnement = new AbonnementDB();
        $this -> user = new UserDB();
    }

    //other functions

    public function addEcoute($id) {
        $this -> ecoute -> addEcoute($_SESSION['userConnecter']['id'],$id);
    }

    public function addSearch($id) {
        $this -> user -> addSearch($_SESSION['userConnecter']['id'],$id);
    }

    public function addLike($id) {
        $this -> like -> addLike($_SESSION['userConnecter']['id'],$id);
    }

    public function addAbonnement($id) {
        $this -> abonnement -> addAbonnement($_SESSION['userConnecter']['id'],$id);
    }

    public function addLikeAlbum($id) {
        $this -> like -> addLikeAlbum($_SESSION['userConnecter']['id'],$id);
    }

    public function addLikePlaylist($id) {
        $this -> like -> addLikePlaylist($_SESSION['userConnecter']['id'],$id);
    }

    public function dislike($id) {
        $this -> like -> dislike($_SESSION['userConnecter']['id'],$id);
    }

    public function deleteAbonnement($id) {
        $this -> abonnement -> deleteAbonnement($_SESSION['userConnecter']['id'],$id);
    }

    public function deletePlaylist($idUser,$id) {
        $this -> playlist -> deletePlaylist($idUser,$id);
    }

    public function deleteMusicPlaylist($idMusic,$id) {
        $this -> playlist -> deleteMusicPlaylist($idMusic,$id);
    }

    public function ajoutMusicPlaylist($idMusic,$id) {
        $this -> playlist -> ajoutMusicPlaylist($idMusic,$id);
    }

    public function dislikeAlbum($id) {
        $this -> like -> dislikeAlbum($_SESSION['userConnecter']['id'],$id);
    }

    public function dislikePlaylist($id) {
        $this -> like -> dislikePlaylist($_SESSION['userConnecter']['id'],$id);
    }

    public function lastEcoute() {
        return $this -> ecoute -> lastEcoute($_SESSION['userConnecter']['id']);
    }

    public function ExistLike($idUser,$id) {
        return $this -> like -> ExistLike($idUser,$id);
    }

    public function ExistAbonnement($idUser,$id) {
        return $this -> abonnement -> ExistAbonnement($idUser,$id);
    }

    public function ExistLikeAlbum($idUser,$id) {
        return $this -> like -> ExistLikeAlbum($idUser,$id);
    }

    public function ExistLikePlaylist($idUser,$id) {
        return $this -> like -> ExistLikePlaylist($idUser,$id);
    }

    public function listAlbum1($idAlbum)
    {
        return $this -> album -> listAlbum1($idAlbum);
    }

    public function listArtist1($idArtist)
    {
        return $this -> artist -> listArtist1($idArtist);
    }

    public function listMusicAlbum($idAlbum)
    {
        return $this -> music -> listMusicAlbum($idAlbum);
    }

    public function listMusicArtist($idArtist)
    {
        return $this -> music -> listMusicArtist($idArtist);
    }

    public function listCategorie1($id)
    {
        return $this -> cat -> listCategorie1($id);
    }

    public function spotifyPlaylist2($id)
    {
        return $this -> playlist -> spotifyPlaylist2($id);
    }

    public function updateNamePlaylist($id,$name)
    {
        return $this -> playlist -> updateNamePlaylist($id,$name);
    }

    public function updateDescriptionPlaylist($id,$description)
    {
        return $this -> playlist -> updateDescriptionPlaylist($id,$description);
    }

    public function Playlist2($id)
    {
        return $this -> playlist -> Playlist2($id);
    }

    public function listPopularMusicArtist($id)
    {
        return $this -> music -> listPopularMusicArtist($_SESSION['SpaceArtist']['id']);
    }

    //index space user

    public function SpaceUser() {
        $_SESSION['listMusique'] = $this -> music -> listMusic();
        $_SESSION['PopularAlbums'] = $this -> album -> listPopularAlbum();
        $_SESSION['PopularAtists'] = $this -> artist -> listPopularArtiste();
        $_SESSION['PopularMusic'] = $this -> music -> listPopularMusic();
        $_SESSION['recentMusiques'] = $this -> music -> recentMusic($_SESSION['userConnecter']['id']);
        $_SESSION['spotifyPlaylist'] = $this -> playlist -> spotifyPlaylist1();
        $_SESSION['like'] = $this->like -> ExistLike($_SESSION['userConnecter']['id'],$_SESSION['ecoute']['id']);
        $_SESSION['createPlaylist'] = 0;
        return $this -> view -> load("SpaceUser/SpaceUser");
    } 

    public function SpacePlaylistSpotify() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['listMusique'] = $this -> music -> spotifyPlaylistMusic($_SESSION['SpacePlaylistSpotify']['id']);
        $_SESSION['likePlaylist'] = $this -> like -> ExistLikePlaylist($_SESSION['userConnecter']['id'],$_SESSION['SpacePlaylistSpotify']['id']);
        return $this -> view -> load("SpaceUser/SpacePlaylistSpotify");
    }

    public function SpaceArtist() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['listMusique'] = $_SESSION['listMusiqueSpaceArtist'];
        $_SESSION['albums'] = $this -> album -> listAlbum($_SESSION['SpaceArtist']['id']);
        $_SESSION['follow'] = $this -> abonnement -> ExistAbonnement($_SESSION['userConnecter']['id'],$_SESSION['SpaceArtist']['id']);
        return $this -> view -> load("SpaceUser/SpaceArtist");
    }

    public function LikedSongs() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['listMusique'] = $this -> music -> listLikedMusic($_SESSION['userConnecter']['id']);
        return $this -> view -> load("SpaceUser/LikedSongs");
    }

    public function AddPlaylist() {
        $_SESSION['createPlaylist']++;
        if($_SESSION['createPlaylist'] == 1){
            $tab = $this -> playlist -> playlistUserCount($_SESSION['userConnecter']['id']);
            $name = "My Playlist #".$tab+1;
            $this -> playlist -> addPlaylist($_SESSION['userConnecter']['id'],$name,"");
            $_SESSION['SpacePlaylist'] = $this -> playlist ->Playlist3($name);
        }
        $_SESSION['listMusique'] = $this -> music -> listMusic();
        return $this -> view -> load("SpaceUser/AddPlaylist");
    }

    //index search

    public function Genre() {
        $_SESSION['listMusique'] = $this -> music -> listMusic();
        $_SESSION['spotifyPlaylist'] = $this -> playlist -> spotifyPlaylist($_SESSION['Genre']['nameCategorie']);
        return $this -> view -> load("SpaceUser/Search/Genre");
    }

    public function Search() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['listMusique'] = $this -> music -> listMusicSearch($_SESSION['userConnecter']['id']);
        $_SESSION['listCategorie'] = $this -> cat -> listCategorie(); 
        $_SESSION['YourToCategorie'] = $this -> cat -> YourToCategorie($_SESSION['userConnecter']['id']); 
        return $this -> view -> load("SpaceUser/Search/Search");
    }

    public function SpaceAlbum() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['listMusique'] = $_SESSION['listMusiqueSpaceAlbum'];
        $_SESSION['likeAlbum'] = $this -> like -> ExistLikeAlbum($_SESSION['userConnecter']['id'],$_SESSION['SpaceAlbum']['id']);
        return $this -> view -> load("SpaceUser/Search/SpaceAlbum");
    }

    public function SpacePlaylist() {
        $_SESSION['list'] = $this -> music -> listMusic();
        $_SESSION['listMusique'] = $this -> music -> PlaylistMusic($_SESSION['SpacePlaylist']['id']);
        return $this -> view -> load("SpaceUser/Search/SpacePlaylist");
    }

    //index space library

    public function Albums() {
        $_SESSION['albums'] = $this -> album -> listUserAlbum($_SESSION['userConnecter']['id']);
        $_SESSION['albumsLike'] = $this -> album -> albumLike($_SESSION['userConnecter']['id']);
        return $this -> view -> load("SpaceUser/Library/Albums");
    }

    public function Artists() {
        $_SESSION['artists'] = $this -> artist -> listUserArtiste($_SESSION['userConnecter']['id']);
        return $this -> view -> load("SpaceUser/Library/Artists");
    }

    public function Playlists() {
        $_SESSION['createPlaylist'] =0;
        $_SESSION['playlist'] = $this -> playlist -> playlistUser($_SESSION['userConnecter']['id']);
        $_SESSION['spotifyPlaylist'] = $this -> playlist -> spotifyPlaylistLike($_SESSION['userConnecter']['id']);
        return $this -> view -> load("SpaceUser/Library/Playlists");
    }

    public function Podcasts() {
        return $this -> view -> load("SpaceUser/Library/Podcasts");
    }

    public function Profil() {
        $_SESSION['createPlaylist'] = 0;
        $_SESSION['playlist'] = $this -> playlist -> playlistUser($_SESSION['userConnecter']['id']);
        $_SESSION['follow'] = $this -> artist -> follow($_SESSION['userConnecter']['id']);
        return $this -> view -> load("SpaceUser/Profil");
    }

}