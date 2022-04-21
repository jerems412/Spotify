<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="artistes")
 */

class Artiste
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
    private $nameArtist;
    /** One artist have Many musiques.
     * @ORM\OneToMany(targetEntity="Musique", mappedBy="artistes")
     */
    private $artisteMusique;
    /** One artist have Many album.
     * @ORM\OneToMany(targetEntity="Album", mappedBy="artistes")
     */
    private $artisteAlbum;
    /** One artist have Many abonnement.
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="artistes")
     */
    private $artisteAbonnement;
    
    public function __construct(){

    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    } 

    public function setNameArtist($nameArtist){
        $this ->nameArtist = $nameArtist; 
    } 
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getNameArtist(){
        return $this ->nameArtist; 
    }

}