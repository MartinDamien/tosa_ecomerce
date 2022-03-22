
<?php
require "connect.php";


$prod = $pdo -> prepare("SELECT produit.nom, produit.description, produit.prix_HT, produit.photo FROM produit");
$prod -> execute();
$P = $prod -> fetchAll();

?>
    <link rel="stylesheet" href="produits.css" />

<section>
    <div id="produits"> 
        <?php
            foreach($P as $index)
            {
                echo'<div class="container"><img src='.$index["photo"].'class="image" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <h3>'.$index["nom"].'</h3>
                                <p>'.$index["description"].'</p>
                                <p><strong>'.$index["prix_HT"].'</strong></p>
                            </div>
                        </div>
                    </div>';
            }
        ?>
    </div>
</section>