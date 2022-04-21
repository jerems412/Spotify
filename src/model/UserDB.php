<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use User;
use Search;

class UserDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
    //ajout user
    public function addUser($id,$name,$mdp,$genre,$birth)
    {
        $date = date('d-m-Y');
        $date = new \DateTime($date);
        $birth = new \DateTime($birth);
        $user = new User;
        $user -> setGenreUser($genre);
        $user -> setDateInscription($date);
        $user -> setEtatUser(1);
        $user -> setBirthUser($birth);
        $user -> setIdentifiantEmailUser($id);
        $user -> setNombreConnexion(0);
        $user -> setProfilNameUser($name);
        $user -> setMdpUser(md5($mdp));
        $this -> entityManager -> persist($user);
        $this -> entityManager -> flush();
    }

    //ajout search
    public function addSearch($id,$name)
    {
        $user = $this -> entityManager->getRepository(User::class)->find($id);
        $search = new Search;
        $search -> setIdUser($user);
        $search -> setValSearch($name);
        $this -> entityManager -> persist($search);
        $this -> entityManager -> flush();
    }

    //modifier mot de passe
    public function updatemdp($id,$modif)
    {
        //update
        $user = $this -> entityManager->getRepository(User::class)->find($id);
        $user->setMdpUser(md5($modif));
        $this -> entityManager -> persist($user);
        $this -> entityManager->flush();
    }

    //user exist
    public function userExist($identifiant,$mdp)
    {
        $mdp = md5($mdp);
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM users WHERE identifiantEmailUser=:idd AND mdpUser = :mdp';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$identifiant, 'mdp' => $mdp]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return $tab[0];
        }else
        {
            return false;
        }
    }

    //user connect
    public function userConnect($id)
    {
        //update
        $user = $this -> entityManager->getRepository(User::class)->find($id);
        $user -> setNombreConnexion($user -> getNombreConnexion() + 1);
        $this -> entityManager -> persist($user);
        $this -> entityManager->flush();
    }

    //user exist1
    public function userExist1($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM users WHERE identifiantEmailUser=:idd';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$id]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return true;
        }else
        {
            return false;
        }
    }

    //modifier user
    public function updateUser($id1,$id,$name,$mdp,$genre,$birth,$date,$nb)
    {
        //update
        $user = $this -> entityManager->getRepository(User::class)->find($id1);
        $user -> setGenreUser($genre);
        $user -> setDateInscription($date);
        $user -> setEtatUser(1);
        $user -> setBirthUser($birth);
        $user -> setIdentifiantEmailUser($id);
        $user -> setNombreConnexion($nb);
        $user -> setProfilNameUser($name);
        $user -> setMdpUser(md5($mdp));
        $this -> entityManager -> persist($user);
        $this -> entityManager->flush();
    }
}




?>