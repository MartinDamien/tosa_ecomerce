<!DOCTYPE html>
<html lang="fr">

<head>
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
        redirection:
        header("location:inscription.html");
    } else {
        echo "vous etes bien inscrit" . "<br>";
    }



    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="../slider.php">retour à la page principale</a>
</body>

</html>