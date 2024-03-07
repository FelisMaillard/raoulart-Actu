<?php
$host = '127.0.0.1';
$db = 'raoulactu';
$user = 'root';
$pass = '';
$port = 3306;
$charset = 'utf8mb4' ;

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn,$user,$pass);
require_once('classActualite.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <title>Raoul's art - Actu</title>
</head>
<body>
    <header>
        <?php
        include 'includes/header.php';
        ?>
    </header>
    <main>
        <?php
            $idChoisie = $_GET['id_actu'];
            $sql="SELECT * FROM actu,auteur WHERE id_actu = $idChoisie AND auteur.id_auteur = actu.auteur";
            $temp=$pdo->query($sql);
            
            while ($resultats = $temp -> fetch()){
                $actu = new Actualite($resultats);
                echo '<div class="chewy-regular panneau-blog">
                        <div class="top-blog">
                            <h2>'. $actu->titre . '</h2>
                            <p>' . $actu->bio . '</p>
                            <p>' . $actu->blog . '</p>
                            <p> Auteur : '. $actu->auteur . '</p>
                        </div>
                        <div class="bot-blog">
                            <img src="medias/'. $actu->img . '" alt="' . $actu->alt_img . '" title ="' . $actu->alt_img .'">
                            <p> Sources : '. $actu->sources . '</p>
                        </div>
                    </div>';
                        }
        ?>
    </main>
    <footer>
        <?php
        include 'includes/footer.php';
        ?>
    </footer>
</body>
</html>