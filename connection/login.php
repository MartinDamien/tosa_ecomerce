<?php
session_start();


require_once '../connect.php';
$email = $_POST['email'];
$password = $_POST['password'];

// password_verify($password, $hash);


$req = "SELECT utilisateur.email, utilisateur.password, utilisateur.nom, utilisateur.prenom, utilisateur.iD_role, role.type_role FROM utilisateur, role  WHERE email = '$email' AND password = '$password' AND role.id = utilisateur.id_role";
$sql = $pdo->prepare($req);
$sql->execute();
$r = $sql->fetch();

echo "<pre>";
echo $email;
echo $password;
echo "</pre>";

if ($sql->rowCount() > 0) {
    
    $_SESSION['nom'] = $r['nom'];
    $_SESSION['prenom'] = $r['prenom'];
    $_SESSION['id_role'] = $r['iD_role'];
    $_SESSION['role'] = $r['type_role'];

    echo $_SESSION['nom'];
    echo $_SESSION['prenom'];
    echo $_SESSION['id_role'];
    echo $_SESSION['role'];

    header("location: ../slider.php");

} else {
    header("location: connecter.html");
}