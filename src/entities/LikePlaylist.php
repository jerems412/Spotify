<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="likesPlaylist")
 */

class LikePlaylist
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
     *@ORM\ ManyToOne(targetEntity="SpotifyPlaylist", inversedBy="playlistLike")
     *@ORM\JoinColumn(name="id_Playlist", referencedColumnName="id")
     */
    private $likePlaylist;
    
    public function __construct(){
        $this->likeUser = new ArrayCollection();
        $this->likePlaylist = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }
    
    public function setIdUser($likeUser){
        $this ->likeUser = $likeUser; 
    }

    public function setIdPlaylist($likePlaylist){
        $this ->likePlaylist = $likePlaylist; 
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

    public function getIdPlaylist(){
        return $this ->likePlaylist; 
    }

    public function getDateLike(){
        return $this ->dateLike; 
    }

}