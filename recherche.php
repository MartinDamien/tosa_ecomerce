<?php
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>instatosa</ins></title>
</head>

<body>
    <header>
        <div class="wrapper">
            <h1><span class="noir">&#x25C6;</span>INSTATOSA<span class="noir">&#x25C6;</span></h1>
            <nav>
                <label for="toggle">☰</label>
                <input type="checkbox" id="toggle">
                <ul>
                    <li><a href="slider.php">Accueil</a></li>
                    <li><a href="inscription/inscription.html">Inscription</a></li>
                    <li><a href="connection/connecter.html">Connexion</a></li>
                    <li><a href="produits.php">Produits</a></li>
                </ul>
            </nav>
        </div>
        <div id="search">
            <form action="recherche.php" id="search" method="GET">
                <input type="search" name="research" id="research" placeholder="Que cherchez-vous?" />
                <button type="submit" form="search">Go</button>
            </form>
        </div>
        </div>
        </div>
    </header>
    <?php
    $entry = $_GET["research"];
    $maj = ucwords($entry);
    $research = $pdo->prepare("SELECT * FROM produit WHERE nom LIKE '%$entry%' OR nom LIKE '%$maj%' OR description LIKE '%$entry%' OR description LIKE '%$maj%' OR prix_HT LIKE '%$entry%' ");
    $research->execute();
    $searching = $research->fetchAll();

    echo "<pre>";
    print_r($searching);
    echo "</pre>";
    ?>
</body>

</html>