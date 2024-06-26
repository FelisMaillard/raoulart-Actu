<?php
require_once('../classes/classActualite.php');
require_once('../classes/classSQL.php');
SQL::connexionBDD();
if (isset($_GET['actu'])) {
    if ($_GET['actu'] == 1) {
        $id = $_GET['id'];
        $titre = $_GET['titre'];
        $bio = $_GET['bio'];
        $blog = $_GET['blog'];
        $date_modif = $_GET['date_modif'];
    }}
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 1) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];
        $categorie_id = $_REQUEST['categorie_id'];
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
                ?>
                <h2>Modifier :</h2>
                <form action="confModif">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="menu" value="1">
                    <label for="nom">Nom : </label>
                    <input type="text" id="nom" name="nom" value="<?=$nom?>" required>
                    <label for="categorie_id">Id de catégorie associé : </label>
                    <input type="number" id="categorie_id" name="categorie_id" value="<?=$categorie_id?>" required>
                    <input type="submit" method="POST">
                </form>
                <?php
                    }}
                if (isset($_GET['actu'])) {
                    if ($_GET['actu'] == 1) {
                ?>
                <h2>Modifier :</h2>
                <form action="confModif">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="actu" value="1">
                    <label for="titre">Titre : </label>
                    <input type="text" id="titre" name="titre" value="<?=$titre?>" required>
                    <label for="bio">Bio : </label>
                    <input type="text" id="bio" name="bio" value="<?=$bio?>" required>
                    <label for="blog">Blog : </label>
                    <input type="text" id="blog" name="blog" value="<?=$blog?>" required>
                    <label for="date_modif">Date de modification : </label>
                    <input type="date" id="date_modif" name="date_modif" value="<?=$date_modif?>" required>
                    <input type="submit" method="POST">
                </form>
                <?php
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