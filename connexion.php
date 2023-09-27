<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<?php
require 'Database.php';
ini_set("log_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
$database = new Database();
$pdo = $database->getPdo();

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $pdostat = $pdo->prepare('SELECT * FROM user WHERE login = :login');
    $pdostat->bindParam(':login', $login);
    $pdostat->execute();
    $shipments = $pdostat->fetch(PDO::FETCH_ASSOC);

    if ($shipments && password_verify($password, $shipments['password'])) {
        echo '<script type="text/javascript">';
        echo 'alert("Connexion en cours...")';
        echo '</script>';
    } else {
        header("Location: index.php.php");
    }
}?>
<div class="column">
    <form action="" method="post">
        <label for="login">login</label>
        <input type="text" id="login" name="login" placeholder="">
        <label for="password">password</label>
        <input type="password" id="password" name="password" placeholder="">
        <input type="submit" value="Soumettre" name="submit">
    </form>
</div>
</body>
</html>
