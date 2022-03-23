<?php
session_start();
require "connect.php";


$prod = $pdo->prepare("SELECT produit.nom, produit.description, produit.prix_HT, produit.photo FROM produit");
$prod->execute();
$P = $prod->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Nos produits</title>
</head>

<body>
    <header>
        <div class="wrapper">
            <h1><span class="noir">&#x25C6;</span>ACCUEIL<span class="noir">&#x25C6;</span></h1>
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


    <section>
        <section>
            <div id="produits">
                <?php
                foreach ($P as $index) {
                    echo '<div class="container"><img src=' . $index["photo"] . 'class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <h3>' . $index["nom"] . '</h3>
                                <p>' . $index["description"] . '</p>
                                <p><strong>' . $index["prix_HT"] . '</strong></p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>

</body>

</html>