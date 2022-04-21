<?php
use libs\system\Controller;

class HomeController extends Controller
{
    private $home;
    public function __construct() {
        parent::__construct();
        $_SESSION['userConnecter']['identifiantEmailUser'] = "";
        $_SESSION['userConnecter']['mdpUser'] = "";
        $_SESSION['erreurEmail1'] = "";
        $_SESSION['erreurEmail2'] = "";
        $_SESSION['erreurAuth'] = "";
        $_SESSION['Email'] = "";
        $_SESSION['Email1'] = "";
        $_SESSION['profil'] = "";
        $_SESSION['mdp'] = "";
        $_SESSION['birth'] = "";
        $_SESSION['listMusique'] = "";
        $_SESSION['ecoute'] = "";
        $_SESSION['like'] = "";
    }

    //index home
    public function Home() {
        return $this -> view -> load("Home/Home");
    } 

    //index premium
    public function Premium() {
        return $this -> view -> load("Home/Premium");
    }
    
    //index telecharger
    public function Telecharger() {
        return $this -> view -> load("Home/Telecharger");
    } 

    //index assistance
    public function Assistance() {
        return $this -> view -> load("Home/Assistance");
    }

}