<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="musiques")
 */

class Musique
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
    private $titre;
    /**
     * @ORM\Column(type="string")
     */
    private $duree;
    /** One musique have Many like.
     * @ORM\OneToMany(targetEntity="Like", mappedBy="musiques")
     */
    private $musiqueLike;
    /** One musique have Many ecoutes.
     * @ORM\OneToMany(targetEntity="Ecoute", mappedBy="musiques")
     */
    private $musiqueEcoute;
    /**
     * One music have One artiste. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Artiste", inversedBy="artisteMusique")
     *@ORM\JoinColumn(name="id_Artiste", referencedColumnName="id")
     */
    private $musiqueArtiste;
    /**
     * One music have One album. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Album", inversedBy="albumMusique")
     *@ORM\JoinColumn(name="id_Album", referencedColumnName="id")
     */
    private $musiqueAlbum;
    /**
     * One music have One categorie. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Categorie", inversedBy="categorieMusique")
     *@ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     */
    private $musiqueCategorie;
    /** One musique have Many mxp.
     * @ORM\OneToMany(targetEntity="MusicXPlaylist", mappedBy="musiques")
     */
    private $musiqueMxp;
    
    public function __construct(){
        $this->musiqueArtiste = new ArrayCollection();
        $this->musiqueAlbum = new ArrayCollection();
        $this->musiqueCategorie = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setTitre($titre){
        $this ->titre = $titre; 
    }

    public function setDuree($duree){
        $this ->duree = $duree; 
    }

    public function setIdArtiste($musiqueArtiste){
        $this ->musiqueArtiste = $musiqueArtiste; 
    }

    public function setIdAlbum($musiqueAlbum){
        $this ->musiqueAlbum = $musiqueAlbum; 
    }

    public function setIdCategorie($musiqueCategorie){
        $this ->musiqueCategorie = $musiqueCategorie; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getTitre(){
        return $this ->titre; 
    }

    public function getDuree(){
        return $this ->duree; 
    }

    public function getIdArtiste(){
        return $this ->musiqueArtiste; 
    }

    public function getIdAlbum(){
        return $this ->musiqueAlbum; 
    }

    public function getIdCategorie(){
        return $this ->musiqueCategorie; 
    }

}