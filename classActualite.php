<?php
require_once 'classSQL.php';
class Actualite extends SQL {
    public $id_actu;
    public $titre;
    public $bio;
    public $blog;   
    public $auteur;
    public $date_publi;
    public $date_modif;
    public $tags;
    public $sources;
    public $img;
    public $alt_img;

    public function __construct(array $values)
    {
        $this->id_actu=$values['id_actu'];
        $this->titre=$values['titre'];
        $this->bio=$values['bio'];
        $this->blog=$values['blog'];
        $this->auteur=$values['auteur'];
        $this->date_publi=$values['date_publi'];
        $this->date_modif=$values['date_modif'];
        $this->tags=$values['tags'];
        $this->sources=$values['sources'];
        $this->img=$values['img'];
        $this->alt_img=$values['alt_img'];
    }
    public static function afficherArticle($values)
    {
        $actualite = [];
        $actu = new Actualite($values);
        $sql="SELECT * FROM actu,auteur WHERE auteur.id_auteur = actu.auteur ORDER BY id_actu LIMIT 5";
        $temp = SQL::afficher($sql);
        while ($resultats = $temp -> fetch()) {
            array_push($actualite,new Actualite($resultats));          
        }
        return $actualite;
    }
    public static function getAll() {
        $sql = 'SELECT * FROM actu ORDER BY date_modif DESC LIMIT 5';
        return SQL::afficher($sql);
    }

    public static function getArticleAuteur(int $id){
        $sql = 'SELECT auteur.nom, auteur.prenom FROM auteur, actu WHERE auteur.id_auteur = actu.id_auteur AND actu.id_actu = '.$id.' ';
        return SQL::afficher($sql);
    }

    public static function getArticle(int $id){
        $sql = 'SELECT * FROM actu WHERE id_actu = '.$id.' ';
        return SQL::afficher($sql);
    }
    public function getId():string
    {
        return $this->id_actu;
    }
    public function getTitre():string
    {
        return $this->titre;
    }
    public function getBio():string
    {
        return $this->bio;
    }
    public function getBlog():string
    {
        return $this->blog;
    }
    public function getAuteur():string
    {
        return $this->auteur;
        // $sql='SELECT auteur.pseudo FROM actu,auteur WHERE actu.auteur = auteur.id_auteur';
        // $temp=query()->sql;
        // return $temp;
    }
    public function getDatePubli():string
    {
        return $this->date_publi;
    }
    public function getDateModif():string
    {
        return $this->date_modif;
    }
    public function getTags():string
    {
        return $this->tags;
    }
    public function getSources():string
    {
        return $this->sources;
    }
    public function getImg():string
    {
        return $this->img;
    }
    public function getAltImg():string
    {
        return $this->alt_img;
    }
}
?>