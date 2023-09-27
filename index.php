<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>

    header {
      text-align: center;
      margin-top: 20px;
    }
	 body {
     text-align: center;
     margin-top: 20px;
     background-image: url("bandes_bleu.jpg");
     background-repeat: no-repeat;
     background-size: cover;
     font-family: Arial, sans-serif;
     margin: 0;
     padding: 0;
    }

    h2, h4, h5 {
      color: #333;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      color: #444;
      margin: 20px 0;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f2f2f2;
      padding: 10px;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar ul li {
      margin-right: 10px;
    }

    .navbar ul li a {
      text-decoration: none;
      color: #333;
      padding: 5px 10px;
    }

    .navbar-left img {
      height: 40px;
      width: auto;
    }

    .navbar-right img {
      height: 40px;
      width: auto;
    }
  </style>
</head>
<body onload="startTimer()">
  
  <div id="demo"></div>

  <script>
    function startTimer() {
      setTimeout(myFunction, 3000);
    }

    function myFunction() {
      var txt;
      if (confirm("Veuillez vous connecter")) {
        txt = window.open('inscription.php');
      } else {
        txt = "";
      }
      document.getElementById("demo").innerHTML = txt;
    }
  </script>
  <nav>
    <div class="navbar">
      <ul>
      <li><a href="index.php">Accueil</a></li>

      <li><a href="inscription.php">inscription</a></li>
      <li><a href="https://github.com/aymeric-poireau/module-connexion-b2">Github_moduleconnection</a></li>
      </ul>
      <div class="navbar-left">
	  <a href="index.php">
          <img src="livreor/dessin_livre.jpg" alt="logo">
        </a>
      </div>
      <div class="navbar-right">
	  <a href="profil.php">
          <img src="image_profil.png" alt="image">
        </a>
      </div>
    </div>
  </nav>

  <header>
    <h1>Bienvenue sur le Formulaire de connection</h1>
    
</body>
	</html>
