<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="musicxplaylists")
 */

class MusicXPlaylist
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * One mxp have One musique. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Musique", inversedBy="musiqueMxp")
     *@ORM\JoinColumn(name="id_musique", referencedColumnName="id")
     */
    private $mxpMusique;
    /**
     * One mxp have One playlist. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Playlist", inversedBy="playlistMxp")
     *@ORM\JoinColumn(name="id_playlist", referencedColumnName="id")
     */
    private $mxpPlaylist;
    /**
     * @ORM\Column(type="date")
     */
    private $dateAjout;
    
    public function __construct(){
        $this->mxpMusique = new ArrayCollection();
        $this->mxpPlaylist = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setIdMusique($mxpMusique){
        $this ->mxpMusique = $mxpMusique; 
    }

    public function setIdPlaylist($mxpPlaylist){
        $this ->mxpPlaylist = $mxpPlaylist; 
    }

    public function setDateAjout($dateAjout){
        $this ->dateAjout = $dateAjout; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getIdMusique(){
        return $this ->mxpMusique; 
    }

    public function getIdPlaylist(){
        return $this ->mxpPlaylist; 
    }

    public function getDateAjout(){
        return $this ->dateAjout; 
    }

}