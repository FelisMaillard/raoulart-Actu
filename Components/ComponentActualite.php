<?php
class ComponentActualite 
{

    public static function afficher($classecss,$actualite)
    {
        echo '<div class="'.$classecss.'">';
        echo '<a class="vertical-flex-container" href="actualite.php?id='.$actualite->id.'">';
        echo '<div class="actualite-image">';   
        echo '<img src="'.$actualite->image.'">'; 
        echo '</div>';
        echo '<div class="actualite-text">';   
        echo '<h2>'.mb_strimwidth($actualite->titre,0,53,'...').'</h2>';    
        echo '<p><b>'.$actualite->auteur.'</b></p>';
        echo '</div>
            </a>
        </div>';
    }

    
}