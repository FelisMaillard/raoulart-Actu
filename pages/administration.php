<?php
require_once('../classes/classActualite.php');
require_once('../classes/classContact.php');
require_once('../classes/classMenu.php');
require_once('../classes/classSQL.php');
SQL::connexionBDD();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Raoul's Art - Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <header>
            <?php
            include("../includes/header.php");
            ?>
        </header>
        <main>
            <div class="container-admin">
                <a href="administration.php?contact=1">Contact</a>
                <a href="administration.php?menu=1">Menu</a>
                <a href="administration.php?page=1">Page</a>
                <a href="administration.php?actualite=1">Actualite</a>
            </div>
            <?php
            if (isset($_GET['contact'])) {
                $contact = $_GET['contact'];
                if ($contact == 1) {
                    echo '<div class="tab-admin">
                    <table border="1px">
                    <tr><th>prenom</th><th>nom</th><th>mail</th><th>Modif</th></tr>';
                    $resultats = contact::getContact(); 
                    for ($i=0;$i < count($resultats);$i++) {
                        $contact = new contact($resultats[$i]);
            ?>
                        <tr><td><?= $contact->getPrenom() ?></td><td><?= $contact->getNom() ?></td><td><?=$contact->getMail()?></td><td><a href="suppr.php?mail=<?= $contact->getMail() ?>&contact=1">Remove</a></td></tr>
            <?php
                            }
            ?>
                        </table>
                    </div>
            <?php
                }}

            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
                if ($menu == 1) {
                    echo '<div class="tab-admin">
                    <table border="1px">
                    <tr><th>Id</th><th>Pages</th><th>catgegorie</th><th>Modif</th></tr>';
                    $resultats = Menu::getMenu();  
                    for ($i=0;$i < count($resultats);$i++) {
                        $menu = new Menu($resultats[$i]);
            ?>
                        <tr><td><?= $menu->getId() ?></td><td><?= $menu->getNom() ?></td><td><?= $menu->getCategorieId() ?></td><td><a href="modif.php?id=<?=$menu->getId()?>&nom=<?=$menu->getNom()?>&categorie_id=<?=$menu->getCategorieId()?>&menu=1">Modifier</a><a href="suppr.php?id=<?= $menu->getId() ?>&menu=1">Remove</a></td></tr>
            <?php
                            }
            ?>
                        </table>
                        <br />
                        <a href="ajout.php">Add</a>
                    </div>
            <?php
                }}

            if (isset($_GET['pages'])) {
                $pages = $_GET['pages'];
                if ($pages == 1) {
                    echo '<div class="tab-admin">
                    <table border="1px">
                    <tr><th>Id</th><th>Pages</th><th>catgegorie</th><th>Modif</th></tr>';
                    $resultats = Menu::getMenu();  
                    for ($i=0;$i < count($resultats);$i++) {
                        $menu = new Menu($resultats[$i]);
            ?>
                        <tr><td><?= $menu->getId() ?></td><td><?= $menu->getNom() ?></td><td><?= $menu->getCategorieId() ?></td><td><a href="modif.php?id=<?=$menu->getId()?>&nom=<?=$menu->getNom()?>&categorie_id=<?=$menu->getCategorieId()?>">Modifier</a><a href="suppr.php?id=<?= $menu->getId() ?>">Remove</a></td></tr>
            <?php
                            }
            ?>
                        </table>
                        <br />
                        <a href="ajout.php">Add</a>
                    </div>
            <?php
                }}

            if (isset($_GET['actualite'])) {
                $actualite = $_GET['actualite'];
                if ($actualite == 1) {
                    echo '<div class="tab-admin">
                    <table border="1px">
                    <tr><th>Id</th><th>Titre</th><th>Bio</th><th>Blog</th><th>date_modif</th><th>Modif</th></tr>';
                    $resultats = Actualite::getAll();  
                    for ($i=0;$i < count($resultats);$i++) {
                        $actu = new Actualite($resultats[$i]);
            ?>
                        <tr><td><?=$actu->getId()?></td><td><?= $actu->getTitre() ?></td><td><?= $actu->getBio() ?></td><td><?= $actu->getBlog()?></td><td><?= $actu->getDateModif() ?></td><td><a href="modif.php?id=<?=$actu->getId()?>&titre=<?=$actu->getTitre()?>&bio=<?=$actu->getBio()?>&blog=<?=$actu->getBlog()?>&date_modif=<?=$actu->getDateModif()?>&actu=1">Modifier</a><a href="suppr.php?id=<?= $actu->getId() ?>&actu=1">Remove</a></td></tr>
            <?php
                            }
            ?>
                        </table>
                        <br />
                        <a href="ajout.php?actu=1">Add</a>
                    </div>
            <?php
                }}
            ?>
            


        </main>
        <footer>
            <?php
            include("../includes/footer.php");
            ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>