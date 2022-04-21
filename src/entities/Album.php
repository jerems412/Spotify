<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="albums")
 */

class Album
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
    private $nameAlbum;
    /**
     * @ORM\Column(type="date")
     */
    private $dateAlbum;
    /** One album have Many musiques.
     * @ORM\OneToMany(targetEntity="Musique", mappedBy="albums")
     */
    private $albumMusique;
    /**
     * One album have One artiste. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Artiste", inversedBy="artisteAlbum")
     *@ORM\JoinColumn(name="id_Artiste", referencedColumnName="id")
     */
    private $albumArtiste;
    /** One album have Many like.
     * @ORM\OneToMany(targetEntity="LikeAlbum", mappedBy="albums")
     */
    private $albumLike;
    
    public function __construct(){
        $this->albumArtiste = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setNameAlbum($nameAlbum){
        $this ->nameAlbum = $nameAlbum; 
    }

    public function setDateAlbum($dateAlbum){
        $this ->dateAlbum = $dateAlbum; 
    }

    public function setIdArtiste($albumArtiste){
        $this ->albumArtiste = $albumArtiste; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getNameAlbum(){
        return $this ->nameAlbum; 
    }

    public function getDateAlbum(){
        return $this ->dateAlbum; 
    }

    public function getIdArtiste(){
        return $this ->albumArtiste; 
    }

}