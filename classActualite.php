<?php
class Actualite {
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
        $this->auteur=$values['pseudo'];
        $this->date_publi=$values['date_publi'];
        $this->date_modif=$values['date_modif'];
        $this->tags=$values['tags'];
        $this->sources=$values['sources'];
        $this->img=$values['img'];
        $this->alt_img=$values['alt_img'];
    }
}
?>