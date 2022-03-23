<?php
    require_once '../connect.php';

    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $hash_password = password_hash($pass, PASSWORD_DEFAULT);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

    //integration des données dans la BdD
    $sql = $pdo->prepare("INSERT INTO utilisateur(id,email,password,nom,prenom,ID_role) VALUE(NULL,?,?,?,?,?)");
    $sql->execute([$mail, $hash_password, $nom, $prenom, $role]);

    $sqlmail = $pdo->prepare("SELECT * FROM `utilisateur` WHERE `email` LIKE = ?");
    $sqlmail->execute([$mail]);
    if ($sqlmail->rowCount() == 1) {
        header("Location: inscription");
} else {
        header("Location: ../slider.php");
}