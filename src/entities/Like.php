<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="likes")
 */

class Like
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
    private $dateLike;
    /**
     * One like have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="userLike")
     *@ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $likeUser;
    /**
     * One like have One musique. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Musique", inversedBy="musiqueLike")
     *@ORM\JoinColumn(name="id_Musique", referencedColumnName="id")
     */
    private $likeMusique;
    
    public function __construct(){
        $this->likeUser = new ArrayCollection();
        $this->likeMusique = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setIdUser($likeUser){
        $this ->likeUser = $likeUser; 
    }

    public function setIdMusique($likeMusique){
        $this ->likeMusique = $likeMusique; 
    }

    public function setDateLike($dateLike){
        $this ->dateLike = $dateLike; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getIdUser(){
        return $this ->likeUser; 
    }

    public function getIdMusique(){
        return $this ->likeMusique; 
    }

    public function getDateLike(){
        return $this ->dateLike; 
    }

}