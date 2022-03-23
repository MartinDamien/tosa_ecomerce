<?php
require "connect.php";

$entry = $_GET["research"];
$maj = ucwords($entry);
$research = $pdo -> prepare("SELECT * FROM produit WHERE nom LIKE '%$entry%' OR nom LIKE '%$maj%' OR description LIKE '%$entry%' OR description LIKE '%$maj%' OR prix_HT LIKE '%$entry%' ");
$research -> execute();
$searching = $research -> fetchAll();

echo "<pre>";
print_r($searching); 
echo "</pre>";
