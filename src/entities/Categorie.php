<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */

class Categorie
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
    private $nameCategorie;
    /** One categorie have Many musics.
     * @ORM\OneToMany(targetEntity="Musique", mappedBy="categories")
     */
    private $categorieMusique;
    /**
     * @ORM\Column(type="string")
     */
    private $color;
    
    public function __construct(){

    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setCategorie($nameCategorie){
        $this ->nameCategorie = $nameCategorie; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getNameCategorie(){
        return $this ->nameCategorie; 
    }

}