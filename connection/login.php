<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require_once '../connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    // password_verify($password, $hash);

    $req = "SELECT utilisateur.email, utilisateur.password, utilisateur.nom, utilisateur.prenom, utilisateur.iD_role, role.type_role FROM utilisateur, role;  WHERE email = ? AND password = ? AND role.id = utilisateur.id_role";
    $sql = $pdo->prepare($req);
    $sql->execute([$email, $password]);
    $r = $sql->fetch();

    if ($sql->rowCount() > 0) {
        // print_r($r) ;
        $_SESSION['nom'] = $r['nom'];
        $_SESSION['prenom'] = $r['prenom'];
        $_SESSION['id_role'] = $r['id_role'];
        $_SESSION['role'] = $r['role'];
    }else {
        redirection: header("location:connecter.html");
    }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wait</title>
</head>

<body>
</body>

</html>