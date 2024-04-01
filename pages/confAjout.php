<?php
require_once('../classes/classActualite.php');
require_once('../classes/classSQL.php');
require_once('../classes/classMenu.php');
SQL::connexionBDD();
if (isset($_REQUEST['actu'])) {
    if ($_REQUEST['actu'] == 1) {
        $titre = $_REQUEST['titre'];
        $bio = $_REQUEST['bio'];
        $blog = $_REQUEST['blog'];
        $auteur = $_REQUEST['auteur'];
        $date_publi = $_REQUEST['date_publi'];
        $date_modif = $_REQUEST['date_modif'];
        $tags = $_REQUEST['tags'];
        $sources = $_REQUEST['sources'];
        $img = $_REQUEST['img'];
        $alt_img = $_REQUEST['alt_img'];
        Actualite::ajoutActu($titre, $bio, $blog, $auteur, $date_publi, $date_modif, $tags, $sources, $img, $alt_img);
    }}
if (isset($_REQUEST['menu'])) {
    if($_REQUEST['menu']==1){
        $nom = $_REQUEST['nom'];
        $categorie_id = $_REQUEST['id'];
        Menu::ajoutMenu($nom, $categorie_id);
    }}
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
            <div class="conf-menu">
                <?php
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 1) {
                    echo'<h2>Le menu a bien été Ajouter</h2>
                    <a href="administration?menu=1">Revenir</a>';
                }}
                if (isset($_GET['actu'])) {
                    if ($_GET['actu'] == 1) {
                    echo'<h2>Votre actualité a bien été Ajouter</h2>
                    <a href="administration?actualite=1">Revenir</a>';
                }}
                ?>
            </div>
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