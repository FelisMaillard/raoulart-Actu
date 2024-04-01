<?php
require_once('../classes/classActualite.php');
require_once('../classes/classSQL.php');
SQL::connexionBDD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <title>Raoul's art - Actu</title>
</head>
<body>
    <header>
        <?php
        include '../includes/header.php';
        ?>
    </header>
    <main>
        <?php
            $id = $_GET['id_actu'];
            $actu = Actualite::getArticle($id);
            $auteur = Actualite::getArticleAuteur($id);
            $actualite = new Actualite($actu[0]);
            echo '<div class="chewy-regular panneau-blog">
                    <div class="top-blog">
                        <h2>' . $actualite->titre . '</h2>
                        <p>' . $actualite->bio . '</p>
                        <p>' . $actualite->blog . '</p>
                        <p> Auteur : ' . $auteur . '</p>
                    </div>
                    <div class="bot-blog">
                        <img src="../medias/' . $actualite->img . '" alt="' . $actualite->alt_img . '" title ="' . $actualite->alt_img . '">
                        <p> Sources : ' . $actualite->sources . '</p>
                    </div>
                </div>';

        ?>
    </main>
    <footer>
        <?php
        include '../includes/footer.php';
        ?>
    </footer>
</body>
</html>