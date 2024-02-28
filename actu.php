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
            $temp=$pdo->query($sql);
            
            while ($resultats = $temp -> fetch()){
                echo '<div class="actu chewy-regular">
                        <div class="top">
                            <h2>'. $resultats['titre']. '</h2>
                            <p>'. $resultats['bio']. '</p>
                        </div>
                        <div class="bot">
                            <img src="'. $resultats['img']. '" alt="' . $resultats['alt_img'] . '" title ="' . $resultats['alt_img'] .'">
                            <p> Sources : '. $resultats['sources']. '</p>
                            <a href="actu.php?id_actu='. $resultats['id_actu']. '" class="buttonShowMore">Voir plus</a>
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