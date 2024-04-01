<?php
    require_once '../classes/classMenu.php';
    $page = basename($_SERVER["PHP_SELF"]);
    $resultat = Menu::getMenu();
?>
<div class="container-header chewy-regular">
    <div class="logo-container">
        <a href="../index.php"><img src="../medias/logo.png" alt=""></a>
    </div>
    <div class="nom-site">
        <h1 >Raoul's art</h1>
    </div>
    <div class="rundog-header">
        <img src="../medias/rundog.gif" alt="">
    </div>
    <div class="nav-container">
        <nav>
            <a href="../index.php">Accueil</a>
            <a href="administration.php">Administration</a>
        </nav>
</div>