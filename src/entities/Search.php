<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="search")
 */

class Search
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
    private $valSearch;
    /**
     * One playlist have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="userSearch")
     *@ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $SearchUser;
    
    public function __construct(){
        $this->SearchUser = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    }

    public function setIdUser($id){
        $this ->SearchUser = $id; 
    }
    
    public function setValSearch($valSearch){
        $this ->valSearch = $valSearch; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    }

    public function getIdUser(){
        return $this ->SearchUser; 
    }

    public function getValSearch(){
        return $this ->valSearch; 
    }

}