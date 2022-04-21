<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"identifiantEmailUser"})})
 */

class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $identifiantEmailUser;
    /**
     * @ORM\Column(type="string")
     */
    private $profilNameUser;
    /**
     * @ORM\Column(type="string")
     */
    private $mdpUser;
    /**
     * @ORM\Column(type="string")
     */
    private $genreUser;
    /**
     * @ORM\Column(type="date")
     */
    private $birthUser;
    /**
     * @ORM\Column(type="integer")
     */
    private $etatUser;
    /**
     * @ORM\Column(type="integer")
     */
    private $nombreConnexion;
    /**
     * @ORM\Column(type="date")
     */
    private $dateInscription;
    /** One user have Many abonnement.
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="users")
     */
    private $userAbonnement;
    /** One user have Many like.
     * @ORM\OneToMany(targetEntity="Like", mappedBy="users")
     */
    private $userLike;
    /** One user have Many Ecoute.
     * @ORM\OneToMany(targetEntity="Ecoute", mappedBy="users")
     */
    private $userEcoute;
    /** One user have Many playlist.
     * @ORM\OneToMany(targetEntity="Playlist", mappedBy="users")
     */
    private $userPlaylist;
    /** One user have Many search.
     * @ORM\OneToMany(targetEntity="Search", mappedBy="users")
     */
    private $userSearch;
    
    public function __construct(){

    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    } 

    public function setIdentifiantEmailUser($identifiantEmailUser){
        $this ->identifiantEmailUser = $identifiantEmailUser; 
    }

    public function setProfilNameUser($profilNameUser){
        $this ->profilNameUser = $profilNameUser; 
    }

    public function setMdpUser($mdpUser){
        $this ->mdpUser = $mdpUser; 
    }

    public function setGenreUser($genreUser){
        $this ->genreUser = $genreUser; 
    } 

    public function setBirthUser($birthUser){
        $this ->birthUser = $birthUser; 
    }
    
    public function setEtatUser($etatUser){
        $this ->etatUser = $etatUser; 
    }

    public function setNombreConnexion($nombreConnexion){
        $this ->nombreConnexion = $nombreConnexion; 
    }

    public function setDateInscription($dateInscription){
        $this ->dateInscription = $dateInscription; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getIdentifiantEmailUser(){
        return $this ->identifiantEmailUser; 
    }

    public function getProfilNameUser(){
        return $this ->profilNameUser; 
    }

    public function getMdpUser(){
        return $this ->mdpUser; 
    }

    public function getGenreUser(){
        return $this ->genreUser; 
    } 

    public function getBirthUser(){
        return $this ->birthUser; 
    }
    
    public function getEtatUser(){
        return $this ->etatUser; 
    }

    public function getNombreConnexion(){
        return $this ->nombreConnexion; 
    }

    public function getDateInscription(){
        return $this ->dateInscription; 
    }

}