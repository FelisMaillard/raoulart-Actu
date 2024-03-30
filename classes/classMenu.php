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

    public function getUrl():string
    {
        return $this->url;
    }

    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    public static function getMenu():array{
        $sql = "SELECT * FROM menu ORDER BY id";
        return SQL::afficher($sql);
    }

    public static function getMenuByCategorie(int $categorie_id):array{
        $sql = "SELECT * FROM menu WHERE categorie_id = $categorie_id";
        return SQL::afficher($sql);
    }

    public static function AddMenu(){
        $sql = "INSERT INTO menu(nom, url, sousmenu) VALUES (:nom, :url, :categorie_id)";
        $data = [
            'nom' =>htmlentities($_POST['nom']),
            'url' => htmlentities($_POST['url']),
            'categorie_id' => htmlentities($_POST['categorie_id'])
        ];
        return SQL::ajouter($sql, $data);
    }
    public static function supprMenu($id){
        $sql = "DELETE FROM menu WHERE id = $id";
        return SQL::suppr($sql);
    }
    public static function ajoutMenu($nom,$id){
        $data = [
            'nom' =>$nom,
            'categorie_id' => $id
        ];
        return SQL::ajoutBase($data);
    }
    public static function modifMenu($id,$nom,$categorie_id){
        $data = [
            'id' =>$id,
            'nom' =>$nom,
            'categorie_id' => $categorie_id
        ];
        return SQL::modifBase($data);
    }
}
?>