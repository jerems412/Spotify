<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="spotify_playlists")
 */

class SpotifyPlaylist
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
    /** One playlist have Many mxp.
     * @ORM\OneToMany(targetEntity="MusicXPlaylistSpotify", mappedBy="spotify_playlists")
     */
    private $playlistMxp;
    /** One playlist have Many like.
     * @ORM\OneToMany(targetEntity="LikePlaylist", mappedBy="spotify_playlists")
     */
    private $playlistLike;
    /**
     * @ORM\Column(type="string")
     */
    private $genre;
    
    public function __construct(){

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