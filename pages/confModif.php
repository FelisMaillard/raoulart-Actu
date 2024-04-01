<?php
require_once('../classes/classActualite.php');
require_once('../classes/classSQL.php');
require_once('../classes/classMenu.php');
SQL::connexionBDD();
if (isset($_GET['actu'])) {
    if ($_GET['actu'] == 1) {
        $id = $_GET['id'];
        $titre = $_GET['titre'];
        $bio = $_GET['bio'];
        $blog = $_GET['blog'];
        $date_modif = $_GET['date_modif'];
        Actualite::updateActu($id, $titre, $bio, $blog, $date_modif);
    }}
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 1) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];
        $categorie_id = $_REQUEST['categorie_id'];
        Menu::modifMenu($id,$nom, $categorie_id);
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
            <?php
            if (isset($_GET['menu'])) {
                if ($_GET['menu'] == 1) {
            echo "<div class='conf-menu'>
                <h2>Le menu a bien été Modifier</h2>
                <a href='administration?menu=1'>Revenir</a>
            </div>";
                }}
            if (isset($_GET['actu'])) {
                if ($_GET['actu'] == 1) {
            echo "<div class='conf-menu'>
                <h2>L'actu a bien été Modifier</h2>
                <a href='administration?actu=1'>Revenir</a>
                </div>";
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