<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WatchWithMe</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="slider.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
    <div id="head">
      <div>
      <ul>
        <li><p><a href="movies/main.php" class="ab">Filmy</a></p></li>
        <li><p><a href="movies/acs.php" class="ab">Akcesoria</a></p></li>
        <li><p>Nowości</p></li>
        <li><p><a href="about.php" class="ab">O nas</a></p></li>
        <li><p><a href="contact.php" class="ab">Kontakt</a></p></li>
      </ul>
    </div>
    <div>
      <ul>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li><p><a href='movies/profile.php' class='ab'>Profil</a></p></li>";
          echo "<li><p><a href='cart.php' class='ab'><i class='fas fa-shopping-cart fa-1x'></i></a></p></li>";
          echo "<li><p><a href='include/logout.inc.php' class='ab'>Wyloguj się</a></p></li>";
        }else{
          echo "<li><p><a href='login.php' class='ab'>Zaloguj się</a></p></li>";
          echo "<li><p><a href='register.php' class='ab'>Zarejestruj się</a></p></li>";
          }
         ?>
      </ul>
    </div>
    </div>
    <div id="log">
      <p><b>Zaloguj się</b><p><br>
        <form action="include/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Nazwa użytkownika lub email..." id="input"><br>
          <input type="password" name="pwd" placeholder="Hasło..." id="input"><br><br>
          <button type="submit" name="submit" id="input">Zaloguj się</button><br><br>
        </form>
        <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
              echo "<p>Wszystkie pola nie zostały uzupełnione!</p>";
            }else if ($_GET["error"] == "wronglogin") {
              echo "<p>Wpisz poprawną nazwę użytkownika</p>";
            }
          }
        ?>
    </div>
    <div id="logo">
      <img src="logo.png">
    </div>

  </body>
</html>
