<?php
    require_once ('classSQL.php');
    class Menu extends SQL{
        public function __construct(array $values) {
            $this->id = $id;
            $this->nom = $nom;
            $this->categorie_id = $categorie_id;
            $this->url = $url;
        }
    }
?>