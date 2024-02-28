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
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <?php
            include("includes/header.php");
            ?>
        </header>

        <main>
            <div class="creme">
                <div class="panneau-actu">
                    <?php
                        $sql="SELECT * FROM actu ORDER BY id_actu";
                        $auteur="SELECT auteur.id_auteur,auteur.pseudo, actu.auteur FROM auteur,actu WHERE auteur.id_auteur = actu.auteur";
                        $temp=$pdo->query($sql);
                        $temp2=$pdo->query($auteur);
                        
                        while ($resultats = $temp -> fetch() and $resultats2 = $temp2 -> fetch()){
                            echo '<div class="actu chewy-regular">
                                    <div class="top">
                                        <h2>'. $resultats['titre']. '</h2>
                                        <p>'. $resultats['bio']. '</p>
                                        <p> Auteur : '. $resultats2['pseudo']. '</p>
                                    </div>
                                    <div class="bot">
                                        <img src="'. $resultats['img']. '" alt="' . $resultats['alt_img'] . '" title ="' . $resultats['alt_img'] .'">
                                        <p> Sources : '. $resultats['sources']. '</p>
                                        <a href="actu.php?id_actu='. $resultats['id_actu']. '" class="buttonShowMore">Voir plus</a>
                                    </div>
                                  </div>';
                        }
                    ?>
                </div>
            </div>
            <div class="panneau-1">
                <div class="left-1">
                    <h2 class="chewy-regular">Who are we ?</h2>
                    <p class="chewy-regular">Raloul's Art is a company that creates a deep bond between you and your pet through art !
                        When you come to Raoul's you can participate in different activites like painting, drawing, craving or pottery with your animal.
                        And if you are not lucky enough to have a pet you can choose to spend your time with one of our shelter dogs.
                        While having fun and bonding you contribute to the well being of lost/abandoned dogs and cats !<br />
                        Isn't it a great idea ?!
                    </p>
                    <br />
                    <p class="chewy-regular">We are waiting for you, when are you coming ?</p>
                </div>
                <div class="right-1">
                    <img src="medias/dog1.jpg" alt="">
                </div>
            </div>
            <div class="creme">
            <div class="panneau-2">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="medias/page1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="medias/page3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="medias/page2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="medias/page4.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            </div>
            <div class="panneau-3">
                <h2 class="chewy-regular">Our Activities :</h2>
                <div class="activities-list">
                    <div class="drawing card">
                        <h3 class="chewy-regular">Drawing</h3>
                        <h4 class="chewy-regular">For 1 hour</h4>
                        <img src="medias/carddraw.jpg" alt="">
                        <h5 class="chewy-regular">15$</h5>
                    </div>
                    <div class="painting card">
                        <h3 class="chewy-regular">Painting</h3>
                        <h4 class="chewy-regular">For 1 hour</h4>
                        <img src="medias/cardpaint.png" alt="">
                        <h5 class="chewy-regular">20$</h5>
                    </div>
                    <div class="pottery card">
                        <h3 class="chewy-regular">Pottery</h3>    
                        <h4 class="chewy-regular">For 1 hour</h4>
                        <img src="medias/cardpot.jpg" alt="">
                        <h5 class="chewy-regular">25$</h5>
                    </div>
                    <div class="carving card">
                        <h3 class="chewy-regular">Carving</h3>
                        <h4 class="chewy-regular">For 1 hour</h4>
                        <img src="medias/cardscult.png" alt="">
                        <h5 class="chewy-regular">30$</h5>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <?php
            include("includes/footer.php");
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
