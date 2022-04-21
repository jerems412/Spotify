<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Abonnement;
use User;
use Artiste;

class AbonnementDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout abonnement
    public function addAbonnement($idUser,$idArtiste)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $artiste = $this -> entityManager->getRepository(Artiste::class)->find($idArtiste);
        $abo = new Abonnement();
        $abo -> setIdUser($user);
        $abo -> setIdArtiste($artiste);
        $date = new \DateTime($date);
        $abo -> setDateAbonnement($date);
        $this -> entityManager -> persist($abo);
        $this -> entityManager -> flush();
    }

    //delete abonnement
    public function deleteAbonnement($idUser,$idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'DELETE FROM abonnements WHERE id_user=:idd AND id_Artiste=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idUser, 'idd1'=>$idArtiste]);
    }

    //nombre abonnement
    public function nbAbonnement($idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT COUNT(*) FROM abonnements WHERE id_Artiste=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$idArtiste]);
        return $result;
    }

    //Abonnement exist
    public function ExistAbonnement($id,$idArtiste)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM abonnements WHERE id_user = :idd AND id_Artiste=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idArtiste]);
        $tab = $result -> fetchAllAssociative();
        if($tab){
            return true;
        }else {
            return false;
        }
    }

}


?>