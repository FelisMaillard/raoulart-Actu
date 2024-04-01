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
    public static function getAll() {
        $sql = 'SELECT * FROM actu ORDER BY date_modif';
        return SQL::afficherBase($sql);
    }

    public static function getArticle(int $id){
        $sql = 'SELECT * FROM actu WHERE id_actu = '.$id;
        return SQL::afficherBase($sql);
    }

    public static function getArticleAuteur(int $id){
        $sql = 'SELECT auteur.pseudo FROM auteur, actu WHERE actu.auteur = auteur.id_auteur AND actu.id_actu = '.$id;
        $result = SQL::afficherBase($sql);
        return $result[0]['pseudo'];
    }
    public static function updateActu(int $id, string $titre, string $bio, string $blog, $date_modif){
        $sql = "UPDATE actu SET titre = :titre, bio = :bio, blog = :blog, date_modif = :date_modif WHERE id_actu = :id";
        $data = [
            'id_actu' => $id,
            'titre' => $titre,
            'bio' => $bio,
            'blog' => $blog,
            'date_modif' => $date_modif
        ];
        return SQL::modifBase($data, $sql);
    }
    public static function supprActu(int $id){
        $sql = "DELETE FROM actu WHERE id_actu = :id_actu";
        $data = [
            'id_actu' => $id
        ];
        return SQL::modifBase($data, $sql);
    }
    public static function ajoutActu(string $titre, string $bio, string $blog, $date_publi, $date_modif, $auteur, string $tags, string $sources, string $img, string $alt_img){
        $sql = "INSERT INTO actu (titre, bio, blog, date_publi, date_modif, auteur, tags, sources, img, alt_img) VALUES (:titre, :bio, :blog, :date_publi, :date_modif, :auteur, :tags, :sources, :img, :alt_img)";
        $data = [
            'titre' => $titre,
            'bio' => $bio,
            'blog' => $blog,
            'date_publi' => $date_publi,
            'date_modif' => $date_modif,
            'auteur' => $auteur,
            'tags' => $tags,
           'sources' => $sources,
            'img' => $img,
            'alt_img' => $alt_img
        ];
        return SQL::modifBase($data, $sql);
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
    public function getAuteur(){
        return $this->auteur;
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