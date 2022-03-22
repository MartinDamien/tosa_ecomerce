<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produits.css" />
    <title>Nos produits</title>
</head>
<body>
    <header>
      <nav>
        <div id="navbar">
            <label for="toggle">☰</label>
            <input type="checkbox" id="toggle">
            <div class="main_pages">
                <a href="inscription/inscription.html">Inscription</a>
                <a href="connection/connecter.html">Connexion</a>
                <a href="produits.php">Produits</a>
            </div>
            <div id="search">
                <form action="recherche.php" id="search"  method="GET">
                    <input type="search" name="research" id="research" placeholder="Que cherchez-vous?" />
                    <button type="submit" form="search">Go</button>
                </form>
            </div>
        </div>
      </nav>
    </header>

    <section>
        <div id="produits">
            <div class="container">
                <img src="img/patrick.png" alt="Patrick" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Imprimante à Patrick</h3>
                    <p>Blablablablabla</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/manette.png" alt="Manette" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Manette de kéké kikou</h3>
                    <p>Blablablabla babylon ganja sinsémilia style</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/apashe.png" alt="Apashe" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Hélicoptère de Combat Apashe</h3>
                    <p>Piou Piou Piou kaboom blblblb</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/souris.png" alt="Souris" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Souris Ergonomique</h3>
                    <p>Souris ergonomique filaire Deluxe Premium Golden Limited Edition GOTY</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/davidson.png" alt="Hérisson Motard" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Hérisson biker</h3>
                    <p>Ancien membre des Hells Angels, un véritable doogy-dingo il n'a vraiment aucune limite</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/lauréat.png" alt="Chat Mignon" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Chat Lauréat de beauté</h3>
                    <p>Chat mignon deuxième dauphin au concours de Mister Félin 2022, livré avec son ruban de la victoire.</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/régisson.jpg" alt="Régisson" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Régisseur Son Hérisson</h3>
                    <p>Régis le régisseur son hérisson saura sonoriser vos meilleurs événements </p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/sourisan.png" alt="Souris non ergonomique" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Souris</h3>
                    <p>Souris blanche peu ergonomique, elle adore pratiquer le pilate et déteste le choux-fleur.</p>
                </div>
                </div>
            </div>
            <div class="container">
                <img src="img/profbio.png" alt="Prof de Bio initiant deux jeunes de la génération Y au Metaverse" class="image" style="width:100%">
                <div class="middle">
                <div class="text">
                    <h3>Professeur de Bio</h3>
                    <p>Prof de Bio initiant deux jeunes de la génération Y au Metaverse, fourni avec deux élèves et deux casques VR selon les stocks disponibles.</p>
                </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>