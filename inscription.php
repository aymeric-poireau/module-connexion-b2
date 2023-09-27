<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<link rel="stylesheet" type="text/css" href="contact.css">
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($login) && !empty($lastname) && !empty($firstname) && !empty($password)) {
        $requete = $pdo->prepare('INSERT INTO user(login, lastname, firstname, password) VALUES (:login, :lastname, :firstname, :password)');

        $requete->bindValue(':login', $login);
        $requete->bindValue(':lastname', $lastname);
        $requete->bindValue(':firstname', $firstname);
        $requete->bindValue(':password', $hash);
        
        $result = $requete->execute();
        if (!$result) {
            echo '<script type="text/javascript">';
            echo 'alert("Erreur, les informations n\'ont pas été enregistrées")';
            echo '</script>';
        } else {
            header("Location: connexion.php");
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Tous les champs sont requis!")';
        echo '</script>';
    }
}
?>
<div class="container">
  <div style="text-align:center">
    <h2>Inscription</h2>
    <h4><a href="connexion.php">Se connecter</a></h4>
    <p></p>
  </div>
  <div class="row">
    <div class="column">
      <img src="" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" placeholder="">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" placeholder="">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" placeholder="">
        <label for="password">mot de passe</label>
        <input type="password" id="password" name="password" placeholder="">
        <input type="submit" value="Soumettre" name="submit">
      </form>

    </div>
</body>
</html>
