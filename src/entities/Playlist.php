<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="playlists")
 */

class Playlist
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
    private $dateCreation;
    /**
     * @ORM\Column(type="string")
     */
    private $namePlaylist;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * One playlist have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="userPlaylist")
     *@ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $playlistUser;
    /** One playlist have Many mxp.
     * @ORM\OneToMany(targetEntity="MusicXPlaylist", mappedBy="playlists")
     */
    private $playlistMxp;
    
    public function __construct(){
        $this->playlistUser = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setDatecreation($dateCreation){
        $this ->dateCreation = $dateCreation; 
    }

    public function setNamePlaylist($namePlaylist){
        $this ->namePlaylist = $namePlaylist; 
    }

    public function setIdUser($playlistUser){
        $this ->playlistUser = $playlistUser; 
    }

    public function setDescription($description){
        $this ->description = $description; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getDateCreation(){
        return $this ->dateCreation; 
    }

    public function getNamePlaylist(){
        return $this ->namePlaylist; 
    }

    public function getIdUser(){
        return $this ->playlistUser; 
    }

    public function getDescription(){
        return $this ->description; 
    }

}