<?php
require_once("Models/Categorie.php");

class ComponentCategorie
{
    public $menus_racines;

    public function __construct()
    {
        $this->menus_racines = Categorie::select('select * from categorie where id_parent is null');
    }

    public function afficherNav($nom,$d)
    {
        echo '<div class="container vertical-flex-container">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">';
        echo '<path stroke-linecap="round" stroke-linejoin="round" d="'.$d.'" />';
        echo '</svg>';
        echo '<h2>'.$nom.'</h2>';
        echo '</div>';
    }
    public function afficherCategorie()
    {
        $categorie=Categorie::select_parent();
        echo '<ul class="horizontal-flex-container">';
        foreach ($categorie as $categorie) {
            if ($categorie->has_menus_enfants()) {
                    echo '<li><a href="page.php?id='.$categorie->id_categorie.'">'.$categorie->nom_categorie.' &#x25BE;</a>';
                    echo '<ul class="dropdown">';
                    $enfant=$categorie->menus_enfants();
                    foreach ($enfant as $enfant) {
                        echo '<li><a href="page.php?id='.$enfant->id_categorie.'">'.$enfant->nom_categorie.'</a></li>';
                    }
                    echo '</ul>';
                    echo '</li>';
            }else{
                    echo '<li><a href="page.php?id='.$categorie->id_categorie.'">'.$categorie->nom_categorie.'</a></li>';
            }
        }
        echo '</ul>';
    }
}
