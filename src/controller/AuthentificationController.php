<?php
use libs\system\Controller;
use src\model\UserDB;
use src\model\MusiqueDB;
use src\model\EcouteDB;
use src\model\LikeDB;
use src\model\AlbumDB;

require_once "libs/system/Controller.php";

class AuthentificationController extends Controller
{
    private $login;
    private $music;
    private $ecoute;
    private $like;
    private $album;
    public function __construct() {
        parent::__construct();
        $this->login = new UserDB();
        $this -> music = new MusiqueDB();
        $this -> ecoute = new EcouteDB();
        $this -> like = new LikeDB();
        $this -> album = new AlbumDB();
    }

    //page login
    public function login () {
        $_SESSION['Email'] = "";
        $_SESSION['Email1'] = "";
        $_SESSION['profil'] = "";
        $_SESSION['mdp'] = "";
        $_SESSION['birth'] = "";
        $_SESSION['erreurEmail1'] = "";
        $_SESSION['erreurEmail2'] = "";
        return $this->view->load("Authentification/login");
    }

    //index s'inscrire
    public function Sign_In() {
        $_SESSION['userConnecter']['identifiantEmailUser'] = "";
        $_SESSION['userConnecter']['mdpUser'] = "";
        $_SESSION['erreurAuth'] = "";
        return $this -> view -> load("Authentification/Sign_In");
    }

    //index s'inscrire
    public function sign_up() {
        extract($_POST);
        $_SESSION['erreurEmail1'] = "";
        $_SESSION['erreurEmail2'] = "";
        $cpt = 0;
        if($Email != $Email1){
            $_SESSION['erreurEmail2'] = '<label style="color:red;font-size:13px;letter-spacing:normal;font-weight:100;">! Les adresses e-mail ne correspondent pas.</label>';
        }else {
            $cpt++;
        }
        if($this -> login -> userExist1($Email)) {
            $_SESSION['erreurEmail1'] = '<label style="color:red;font-size:13px;letter-spacing:normal;font-weight:100;">! E-mail deja pris.</label>';
        }else {
            $cpt++;
        }
        if($cpt == 2) {
            $this -> login -> addUser($Email,$name,$mdp,$genre,$birth);
            return $this -> login();
        }else{
            $_SESSION['Email'] = $Email;
            $_SESSION['Email1'] = $Email1;
            $_SESSION['profil'] = $name;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['birth'] = $birth;
            return $this -> Sign_In();
        }
    }

    //test login
    public function logon() {
        extract($_POST);
        if($this -> login -> userExist($iden,$mdp))
        {
            $_SESSION['userConnecter'] = $this -> login -> userExist($iden,$mdp);
            $this -> login -> userConnect($_SESSION['userConnecter']['id']);
            $_SESSION['block'] = "disabled";
            $_SESSION['listMusique'] = $this -> music -> listMusic();
            $svg = $this -> ecoute ->lastEcoute($_SESSION['userConnecter']['id']);
            if($svg){
                foreach ($_SESSION['listMusique'] as $value) {
                    if ($value['id'] == $svg['id_musique']) {
                        $_SESSION['ecoute'] = $value;
                    }
                }
            }else{
                $_SESSION['ecoute'] = $_SESSION['listMusique'][rand(1,100)];
            }
            $_SESSION['precedent'] = $_SESSION['ecoute'];
            $_SESSION['like'] = $this -> like -> ExistLike($_SESSION['userConnecter']['id'],$_SESSION['ecoute']['id']);
            $_SESSION['PopularAlbums'] = $this -> album -> listPopularAlbum();
            header("Location: http://localhost/mes_projets/spotify/SpaceUser/SpaceUser");
        }else
        {
            $_SESSION['userConnecter']['identifiantEmailUser'] = $iden;
            $_SESSION['userConnecter']['mdpUser'] = $mdp;
            $_SESSION['erreurAuth'] = '<a style="background:red;font-size:13px;letter-spacing:normal;border-radius:3px;">! Nom d\'utilisateur ou mot de passe incorrect.</a><br>';
            return $this -> login();
        }
    }

    
}