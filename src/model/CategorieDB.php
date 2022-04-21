<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use Categorie;

class CategorieDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
    //ajout user
    public function addCategorie($name)
    {
        $categorie = new Categorie();
        $categorie -> setCategorie($name);
        $this -> entityManager -> persist($categorie);
        $this -> entityManager -> flush();
    }

    //list genres
    public function listCategorie()
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM categories';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery();
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

    //list genres selectionner
    public function listCategorie1($id)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM categories WHERE id=:id';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$id]);
        $tab = $result -> fetchAllAssociative();
        return $tab[0];
    }

    //list your top genre   
    public function YourToCategorie($idUser)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT c.id,c.nameCategorie,c.color,count(e.id) nb FROM categories c,musiques m,ecoutes e WHERE c.id=m.id_categorie AND m.id=e.id_Musique AND e.id_user=:id GROUP BY c.id ORDER BY nb DESC';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['id'=>$idUser]);
        $tab = $result -> fetchAllAssociative();
        return $tab;
    }

}

?>