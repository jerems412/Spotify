<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use MusicXPlaylist;
use Playlist;
use Musique;

class MusicXPlaylistDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout musique dans une playliste
    public function addMxP($idPlaylist,$idMusique)
    {
        $date = date('d-m-Y');
        $playlist = $this -> entityManager->getRepository(Playlist::class)->find($idPlaylist);
        $musique = $this -> entityManager->getRepository(Musique::class)->find($idMusique);
        $mxp = new MusicXPlaylist();
        $mxp -> setIdMusique($musique);
        $mxp -> setIdPlaylist($playlist);
        $date = new \DateTime($date);
        $mxp -> setDateAjout($date);
        $this -> entityManager -> persist($mxp);
        $this -> entityManager -> flush();
    }

    //list spotify playlist music
    public function playlistMusic($id)
    {
        $conn = $this->entityManager->getConnection();
        $sql = 'SELECT m.id,m.titre,m.duree,a.nameArtist,aa.id idAlbum,aa.nameAlbum,c.nameCategorie,mp.dateAjout FROM musiques m,albums aa, artistes a,categories c,musicxplaylists mp WHERE m.id_Album=aa.id AND m.id_Artiste=a.id AND m.id_categorie=c.id AND m.id=mp.id_Musique AND mp.id_Playlist=:dd';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['dd' => $id]);
        $tab = $result->fetchAllAssociative();
        return $tab;
    }

    //supprimer musique d'une playlist
    public function deleteMusique($idPlaylist,$idMusique)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM musicxplaylists WHERE id_musique=:idd AND id_playlist=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idMusique, 'idd1'=>$idPlaylist]);
    }

}


?>