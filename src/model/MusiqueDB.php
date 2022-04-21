<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Musique;
use Album;
use Categorie;
use Artiste;
use Like;

class MusiqueDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout album
    public function addMusique($name,$idArtiste,$idAlbum,$idCategorie,$duree)
    {
        $artiste = $this -> entityManager->getRepository(Artiste::class)->find($idArtiste);
        $categorie = $this -> entityManager->getRepository(Categorie::class)->find($idCategorie);
        $album = $this -> entityManager->getRepository(Album::class)->find($idAlbum);
        $musique = new Musique;
        $musique -> setIdArtiste($artiste);
        $musique -> setDuree($duree);
        $musique -> setIdAlbum($album);
        $musique -> setIdCategorie($categorie);
        $musique -> setTitre($name);
        $this -> entityManager -> persist($musique);
        $this -> entityManager -> flush();
    }

    //list music
    public function listMusic()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.nameAlbum,aa.id idAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list music
    public function listMusicSearch($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = "SELECT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.nameAlbum,aa.id idAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c,search s WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND s.id_user=:id AND m.titre LIKE s.valSearch";
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list music
    public function listMusicAlbum($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.nameAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND aa.id=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list music
    public function listMusicArtist($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND a.id=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list music liked
    public function listLikedMusic($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.id idAlbum,aa.nameAlbum,c.nameCategorie,k.dateLike FROM musiques m,albums aa, artistes a,categories c,likes k WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=k.id_Musique AND k.id_user=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list music by categorie
    public function listMusicC($cat)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie FROM musiques m,albums aa, artistes a,categories c WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND c.nameCategorie=:cat';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['cat'=>$cat]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list popular music
    public function listPopularMusic()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT m.id,m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie, count(e.id) nb FROM musiques m,albums aa, artistes a,categories c, ecoutes e WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=e.id_musique GROUP BY m.id ORDER BY nb DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list popular music artist
    public function listPopularMusicArtist($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT DISTINCT m.id,m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie, count(e.id) nb FROM musiques m,albums aa, artistes a,categories c, ecoutes e WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=e.id_musique AND m.id_Artiste=:id GROUP BY m.id ORDER BY nb DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //tendance music
    public function tendanceMusic()
    {
        $date = date('d-m-Y');
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT m.titre,m.duree,a.nameArtist,aa.nameAlbum,c.nameCategorie, count(e.id) "nbEcoute" FROM musiques m,albums aa, artistes a, categories c, ecoutes e WHERE e.dateEcoute=:dd GROUP BY m.id ORDER BY nbEcoute DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['dd'=> $date]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //recent music
    public function recentMusic($idUser)
    {
        $conn = $this->entityManager->getConnection();
        $sql = 'SELECT DISTINCT m.id,m.titre,m.duree,aa.nameArtist,e.dateEcoute FROM musiques m,artistes aa,ecoutes e WHERE m.id_Artiste=aa.id AND m.id=e.id_Musique AND e.id_user=:dd ORDER BY e.dateEcoute DESC';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['dd' => $idUser]);
        $tab = $result->fetchAllAssociative();
        return $tab;
    }

    //list spotify playlist music
    public function spotifyPlaylistMusic($id)
    {
        $conn = $this->entityManager->getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.id idAlbum,aa.nameAlbum,c.nameCategorie,mp.dateAjout FROM musiques m,albums aa, artistes a,categories c,musicxplaylistsspotify mp WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=mp.id_Musique AND mp.id_Playlist=:dd';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['dd' => $id]);
        $tab = $result->fetchAllAssociative();
        return $tab;
    }

    //list spotify playlist music
    public function PlaylistMusic($id)
    {
        $conn = $this->entityManager->getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,a.id idArtist,aa.id idAlbum,aa.nameAlbum,c.nameCategorie,mp.dateAjout FROM musiques m,albums aa, artistes a,categories c,musicxplaylists mp WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=mp.id_Musique AND mp.id_playlist=:dd';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['dd' => $id]);
        $tab = $result->fetchAllAssociative();
        return $tab;
    }

}


?>