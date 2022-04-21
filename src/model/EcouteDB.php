<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Ecoute;
use User;
use Musique;

class EcouteDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout user
    public function addEcoute($idUser,$idMusique)
    {
        $date = date('d-m-Y');
        $user = $this -> entityManager->getRepository(User::class)->find($idUser);
        $musique = $this -> entityManager->getRepository(Musique::class)->find($idMusique);
        $ecoute = new Ecoute;
        $ecoute -> setIdUser($user);
        $ecoute -> setIdMusique($musique);
        $date = new \DateTime($date);
        $ecoute -> setDateEcoute($date);
        $this -> entityManager -> persist($ecoute);
        $this -> entityManager -> flush();
    }

    //nombre d'ecoute
    public function nbEcoute($id,$idMusique)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT COUNT(*) FROM ecoutes WHERE id_user = :idd AND id_musique=:idd1';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idMusique]);
        return $result;
    }

    //nombre d'ecoute
    public function nbEcoute2($id,$idMusique,$date)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT COUNT(*) FROM ecoutes WHERE id_user = :idd AND id_musique=:idd1 AND dateEcoute=:idd2';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id, 'idd1'=>$idMusique, 'idd2'=>$date]);
        return $result;
    }

    //nombre d'ecoute
    public function LastEcoute($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM ecoutes WHERE id=(SELECT max(id) FROM ecoutes WHERE id_user=:id)';
        $stmt = $conn -> prepare($sql);
        $result1 = $stmt -> executeQuery(['id'=>$id]);
        $tab1 = $result1 -> fetchAllAssociative();
        if($tab1){
            return $tab1[0];
        }else{
            return false;
        }
    }
}


?>