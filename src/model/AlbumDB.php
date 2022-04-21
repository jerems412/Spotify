<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Album;
use Artiste;

class AlbumDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout album
    public function addAlbum($name,$id)
    {
        $date = date('Y-m-d');
        $date = new \DateTime($date);
        $album = new Album;
        $album -> setNameAlbum($name);
        $album -> setDateAlbum($date);
        $artiste = $this -> entityManager->getRepository(Artiste::class)->find($id);
        $album -> setIdArtiste($artiste);
        $this -> entityManager -> persist($album);
        $this -> entityManager -> flush();
    }

    //lister album
    public function listAlbum($idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT id,nameAlbum FROM albums WHERE id_Artiste = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idArtiste]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister album
    public function listAlbum1($idAlbum)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT a.id,a.nameAlbum,aa.nameArtist FROM albums a,artistes aa WHERE a.id_Artiste=aa.id AND a.id = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idAlbum]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0];
    }

    //lister album
    public function listPopularAlbum()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT a.id,a.nameAlbum,aa.nameArtist,count(e.id) nb FROM albums a,artistes aa,musiques m,ecoutes e WHERE a.id_Artiste=aa.id AND a.id=m.id_Album AND aa.id=m.id_Artiste AND m.id=e.id_Musique GROUP BY a.id ORDER BY nb DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister album user
    public function listUserAlbum($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT a.id,a.nameAlbum,aa.nameArtist FROM albums a,artistes aa,musiques m,ecoutes e WHERE a.id=m.id_Album AND a.id_Artiste=aa.id AND m.id=e.id_Musique AND e.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }


    //lister album
    public function listAlbumSearch($name)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM albums WHERE nameAlbum = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$name]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //album like
    public function albumLike($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT a.id,a.nameAlbum,aa.nameArtist FROM albums a,artistes aa,likesalbum l WHERE a.id_Artiste=aa.id AND a.id=l.id_Album AND l.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }
}


?>