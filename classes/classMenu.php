<?php
require_once 'classSQL.php';

class Menu extends SQL{
    public $id;
    public $nom;
    public $categorie_id;
    public function __construct(array $values){
        $this->id = $values['id'];
        $this->nom = $values['nom'];
        $this->categorie_id = $values['categorie_id'];
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getNom():string
    {
        return $this->nom;
    }

    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    public static function getMenu():array{
        $sql = "SELECT * FROM menu ORDER BY id";
        return SQL::afficherBase($sql);
    }

    public static function getMenuByCategorie(int $categorie_id):array{
        $sql = "SELECT * FROM menu WHERE categorie_id = $categorie_id";
        return SQL::afficherBase($sql);
    }
    public static function supprMenu($id){
        $sql = "DELETE FROM menu WHERE id = :id";
        $data = [
            'id' =>$id
        ];
        return SQL::modifBase($data,$sql);
    }

    public static function ajoutMenu($nom,$id){
        $sql = "INSERT INTO menu(nom, categorie_id) VALUES (:nom, :categorie_id)";
        $data = [
            'nom' =>$nom,
            'categorie_id' => $id
        ];
        return SQL::modifBase($data,$sql);
    }
    public static function modifMenu($id,$nom,$categorie_id){
        $sql = "UPDATE menu SET nom = :nom , categorie_id = :categorie_id WHERE id = :id";
        $data = [
            'id' =>$id,
            'nom' =>$nom,
            'categorie_id' => $categorie_id
        ];
        return SQL::modifBase($data,$sql);
    }
}
?>