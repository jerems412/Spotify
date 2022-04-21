<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Playlist;
use MusicXPlaylist;
use Musique;
use SpotifyPlaylist;
use User;

class PlaylistDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //add playlist
    public function addPlaylist($idUser,$name,$desc)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $like = new Playlist();
        $like -> setIdUser($user);
        $like -> setNamePlaylist($name);
        $date = new \DateTime($date);
        $like -> setDateCreation($date);
        $like -> setDescription($desc);
        $this -> entityManager -> persist($like);
        $this -> entityManager -> flush();
    }

    //playlist exist
    public function playlistExist($id,$name)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM playlists WHERE id_user=:idd AND namePlaylist= :name';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'name' => $name]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return true;
        }else
        {
            return false;
        }
    }

    //playlist user
    public function playlistUser($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.dateCreation,p.namePlaylist,p.description FROM playlists p WHERE p.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //playlist spotify
    public function spotifyPlaylist($name)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description FROM spotify_playlists p WHERE p.genre=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$name]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //playlist spotify
    public function spotifyPlaylistLike($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description,p.genre FROM spotify_playlists p,likesplaylist l WHERE p.id=l.id_Playlist AND l.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //playlist spotify
    public function spotifyPlaylist1()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description FROM spotify_playlists p';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //playlist spotify
    public function spotifyPlaylist2($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description FROM spotify_playlists p WHERE p.id=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0];
    }

    //playlist 
    public function Playlist2($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description FROM playlists p WHERE p.id=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0];
    }

    //delete playlist
    public function deletePlaylist($id,$idPlaylist)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM musicxplaylists WHERE id_playlist = :id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id' => $idPlaylist]);
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM playlists WHERE id_user=:idd AND id= :id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'id' => $idPlaylist]);
    }

    //delete playlist
    public function deleteMusicPlaylist($idMusic,$idPlaylist)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM musicxplaylists WHERE id_musique=:idd AND id_playlist = :id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd' => $idMusic,'id' => $idPlaylist]);
    }

    //ajout playlist
    public function ajoutMusicPlaylist($idMusic,$idPlaylist)
    {
        $date = date('d-m-Y');
        $musique = $this -> entityManager->getRepository(Musique::class)->find($idMusic);
        $playlist = $this -> entityManager->getRepository(Playlist::class)->find($idPlaylist);
        $musicXplaylist = new MusicXPlaylist();
        $musicXplaylist -> setIdMusique($musique);
        $musicXplaylist -> setIdPlaylist($playlist);
        $date = new \DateTime($date);
        $musicXplaylist -> setDateAjout($date);
        $this -> entityManager -> persist($musicXplaylist);
        $this -> entityManager -> flush();
    }

    //update name playlist
    public function updateNamePlaylist($idPlaylist,$name)
    {
        $playlist = $this -> entityManager->getRepository(Playlist::class)->find($idPlaylist);
        $playlist -> setNamePlaylist($name);
        $this -> entityManager -> persist($playlist);
        $this -> entityManager -> flush();
    }

    //update description playlist
    public function updateDescriptionPlaylist($idPlaylist,$description)
    {
        $playlist = $this -> entityManager->getRepository(Playlist::class)->find($idPlaylist);
        $playlist -> setDescription($description);
        $this -> entityManager -> persist($playlist);
        $this -> entityManager -> flush();
    }

    //playlist 
    public function Playlist3($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.namePlaylist,p.dateCreation,p.description FROM playlists p WHERE p.namePlaylist=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0];
    }

    //playlist user
    public function playlistUserCount($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT p.id,p.dateCreation,p.namePlaylist,p.description FROM playlists p WHERE p.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return count($tab);
    }

}


?>