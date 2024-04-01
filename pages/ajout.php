<?php
require_once('../classes/classActualite.php');
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
            <div class="conf-menu">
            <?php
            if (isset($_GET['actu'])) {
                if($_GET['actu']==1){
                    echo'<h2>Ajouter :</h2>
                    <form action="confAjout">
                        <input type="hidden" name="actu" value="1">
                        <label for="titre">Titre : </label>
                        <input type="text" id="titre" name="titre" required>

                        <label for="bio">Bio : </label>
                        <input type="text" id="bio" name="bio" required>

                        <label for="blog">Blog : </label>
                        <input type="text" id="blog" name="blog" required>

                        <label for="date_publi">Date publi: </label>
                        <input type="date" id="date_publi" name="date_publi" required>

                        <label for="date_modif">Date modif: </label>
                        <input type="date" id="date_modif" name="date_modif" required>

                        <label for="auteur">Auteur : </label>
                        <input type="number" id="auteur" name="auteur" required>

                        <label for="tags">Tags : </label>
                        <input type="text" id="tags" name="tags" required>

                        <label for="sources">Sources : </label>
                        <input type="text" id="sources" name="sources" required>

                        <label for="img">Image : </label>
                        <input type="text" id="img" name="img" required>

                        <label for="alt_img">Alt Image : </label>
                        <input type="text" id="alt_img" name="alt_img" required>

                        <input type="submit" method="POST">
                    </form>';
                }}
            if (isset($_GET['menu'])) {
                if($_GET['menu']==1){
                    echo'<h2>Ajouter :</h2>
                    <form action="confAjout">
                        <input type="hidden" name="menu" value="1">

                        <label for="nom">Nom : </label>
                        <input type="text" id="nom" name="nom" required>

                        <label for="id">Id de catégorie associé : </label>
                        <input type="number" id="id" name="id" required>
                        
                        <input type="submit" method="POST">
                    </form>';
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