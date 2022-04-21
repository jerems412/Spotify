<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Like;
use LikeAlbum;
use LikePlaylist;
use Album;
use User;
use Musique;
use SpotifyPlaylist;

class LikeDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout like
    public function addLike($idUser,$idMusique)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $musique = $this -> entityManager->getRepository(Musique::class)->find($idMusique);
        $like = new Like();
        $like -> setIdUser($user);
        $like -> setIdMusique($musique);
        $date = new \DateTime($date);
        $like -> setDateLike($date);
        $this -> entityManager -> persist($like);
        $this -> entityManager -> flush();
    }

    //ajout like Album
    public function addLikeAlbum($idUser,$idAlbum)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $album = $this -> entityManager->getRepository(Album::class)->find($idAlbum);
        $like = new LikeAlbum();
        $like -> setIdUser($user);
        $like -> setIdAlbum($album);
        $date = new \DateTime($date);
        $like -> setDateLike($date);
        $this -> entityManager -> persist($like);
        $this -> entityManager -> flush();
    }

    //ajout like playlist
    public function addLikePlaylist($idUser,$idPlaylist)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $playlist = $this -> entityManager->getRepository(SpotifyPlaylist::class)->find($idPlaylist);
        $like = new LikePlaylist();
        $like -> setIdUser($user);
        $like -> setIdPlaylist($playlist);
        $date = new \DateTime($date);
        $like -> setDateLike($date);
        $this -> entityManager -> persist($like);
        $this -> entityManager -> flush();
    }

    //nombre de like
    public function nbLike($id,$idMusique)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT COUNT(*) FROM likes WHERE id_user = :idd AND id_Musique=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idMusique]);
        return $result;
    }

    //dislike
    public function dislike($id,$idMusique)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM likes WHERE id_user = :idd AND id_Musique=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idMusique]);
    }

    //dislike Album
    public function dislikeAlbum($id,$idAlbum)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM likesalbum WHERE id_user = :idd AND id_Album=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idAlbum]);
    }

    //dislike Playlist
    public function dislikePlaylist($id,$idPlaylist)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM likesplaylist WHERE id_user = :idd AND id_Playlist=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idPlaylist]);
    }

    //like exist
    public function ExistLike($id,$idMusique)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM likes WHERE id_user = :idd AND id_Musique=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idMusique]);
        $tab = $result -> fetchAllAssociative();
        if($tab){
            return true;
        }else {
            return false;
        }
    }

    //like exist
    public function ExistLikeAlbum($id,$idAlbum)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM likesalbum WHERE id_user = :idd AND id_Album=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idAlbum]);
        $tab = $result -> fetchAllAssociative();
        if($tab){
            return true;
        }else {
            return false;
        }
    }

    //like exist
    public function ExistLikePlaylist($id,$idPlaylist)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM likesplaylist WHERE id_user = :idd AND id_Playlist=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idPlaylist]);
        $tab = $result -> fetchAllAssociative();
        if($tab){
            return true;
        }else {
            return false;
        }
    }



}


?>