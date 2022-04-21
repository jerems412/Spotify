<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="ecoutes")
 */

class Ecoute
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
    private $dateEcoute;
    /**
     * One ecoute have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="userEcoute")
     *@ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $ecouteUser;
    /**
     * One ecoute have One musique. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Musique", inversedBy="musiqueEcoute")
     *@ORM\JoinColumn(name="id_musique", referencedColumnName="id")
     */
    private $ecouteMusique;
    
    public function __construct(){
        $this->ecouteUser = new ArrayCollection();
        $this->ecouteMusique = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setIdUser($ecouteUser){
        $this ->ecouteUser = $ecouteUser; 
    }

    public function setIdMusique($ecouteMusique){
        $this ->ecouteMusique = $ecouteMusique; 
    }

    public function setDateEcoute($dateEcoute){
        $this ->dateEcoute = $dateEcoute; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getIdUser(){
        return $this ->ecouteUser; 
    }

    public function getIdMusique(){
        return $this ->ecouteMusique; 
    }

    public function getDateEcoute(){
        return $this ->dateEcoute; 
    }

}