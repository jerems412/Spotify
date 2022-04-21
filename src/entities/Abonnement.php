<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="abonnements")
 */

class Abonnement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="date")
     */
    private $dateAbonnement;
    /**
     * One abonnement have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="userAbonnement")
     *@ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $abonnementUser;
    /**
     * One abonnement have One artiste. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Artiste", inversedBy="artisteAbonnement")
     *@ORM\JoinColumn(name="id_Artiste", referencedColumnName="id")
     */
    private $abonnementArtiste;
    
    public function __construct(){
        $this->abonnementUser = new ArrayCollection();
        $this->abonnementArtiste = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    } 

    public function setDateAbonnement($dateAbonnement){
        $this ->dateAbonnement = $dateAbonnement; 
    }
    
    public function setIdUser($abonnementUser){
        $this ->abonnementUser = $abonnementUser; 
    }

    public function setIdArtiste($abonnementArtiste){
        $this ->abonnementArtiste = $abonnementArtiste; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getDateAbonnement(){
        return $this ->dateAbonnement; 
    }

    public function getIdUser(){
        return $this ->abonnementUser; 
    }

    public function getIdArtiste(){
        return $this ->abonnementArtiste; 
    }

}