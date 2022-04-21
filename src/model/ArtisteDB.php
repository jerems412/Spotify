<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";

class ArtisteDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //lister artiste
    public function listArtisteSearch($nameArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM artistes WHERE nameArtiste = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$nameArtiste]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister Artiste
    public function listArtist($idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM Artistes WHERE id = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idArtiste]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister Ecoutes Artiste
    public function listEcoutesArtist($idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT count(e.id) nb FROM ecoutes e,musiques m WHERE e.id_musique=m.id AND m.id_Artiste = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idArtiste]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0]['nb'];
    }

    //lister one artist
    public function listArtist1($idArtist)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT a.id,a.nameArtist,a.id nb,count(aa.id) abo FROM artistes a,abonnements aa WHERE a.id=aa.id_Artiste AND a.id=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idArtist]);
        $tab = $result -> fetchAllAssociative();
        $tab[0]['nb'] = $this -> listEcoutesArtist($tab[0]['id']);
        return $tab[0];
    }

    //lister album
    public function listPopularArtiste()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT aa.id,aa.nameArtist,count(e.id) nb FROM artistes aa,musiques m,ecoutes e WHERE aa.id=m.id_Artiste AND m.id=e.id_Musique GROUP BY aa.id ORDER BY nb DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister user artist
    public function listUserArtiste($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT a.id,a.nameArtist FROM artistes a,musiques m,ecoutes e WHERE a.id=m.id_Artiste AND m.id=e.id_Musique AND e.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister music
    public function listMusicArtiste($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c WHERE a.id = :idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //lister follow
    public function follow($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT a.id,a.nameArtist FROM artistes a,abonnements aa WHERE a.id=aa.id_Artiste AND aa.id_user=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

}


?>