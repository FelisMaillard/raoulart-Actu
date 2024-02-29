<?php
$host = '127.0.0.1';
$db = 'raoulactu';
$user = 'root';
$pass = '';
$port = 3306;
$charset = 'utf8mb4' ;

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn,$user,$pass);
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
            $sql="SELECT * FROM actu WHERE id_actu = $idChoisie";
            $auteur="SELECT auteur.id_auteur,auteur.pseudo, actu.auteur FROM auteur,actu WHERE auteur.id_auteur = actu.auteur"; //possibilité de faire une seule requete SQL
            $temp=$pdo->query($sql);
            $temp2=$pdo->query($auteur);
            
            while ($resultats = $temp -> fetch() and $resultats2 = $temp2 -> fetch()){
                echo '<div class="chewy-regular panneau-blog">
                        <div class="top-blog">
                            <h2>'. $resultats['titre']. '</h2>
                            <p>' . $resultats['bio']. '</p>
                            <p>' . $resultats['blog']. '</p>
                            <p> Auteur : '. $resultats2['pseudo']. '</p>
                        </div>
                        <div class="bot-blog">
                            <img src="'. $resultats['img']. '" alt="' . $resultats['alt_img'] . '" title ="' . $resultats['alt_img'] .'">
                            <p> Sources : '. $resultats['sources']. '</p>
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
