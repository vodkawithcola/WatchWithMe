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
      <p><b>Zarejestruj się</b><p><br>
        <form action="/3b3t/watchwithme/include/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Imię i nazwisko..." id="input"><br>
          <input type="text" name="email" placeholder="Email..." id="input"><br>
          <input type="text" name="username" placeholder="Nazwa użytkownika..." id="input"><br>
          <input type="password" name="pwd" placeholder="Hasło..." id="input"><br>
          <input type="password" name="pwdr" placeholder="Powtórz hasło..." id="input"><br><br>
          <button type="submit" name="submit" id="input">Zarejestruj</button>
        </form><br><br>
        <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
              echo "<p class='pp'>Wszystkie pola nie zostały uzupełnione!</p>";
            }else if ($_GET["error"] == "invaliduid") {
              echo "<p class='pp'>Wpisz poprawną nazwę użytkownika</p>";
            }else if ($_GET["error"] == "passworddontmatch") {
              echo "<p class='pp'>Podane hasła różnią się od siebie</p>";
            }else if ($_GET["error"] == "usernametaken") {
              echo "<p class='pp'>Podana nazwa użytkownika jest już zajęta</p>";
            }else if ($_GET["error"] == "stmfailed") {
              echo "<p class='pp'>Coś poszło nie tak, spróbuj ponownie</p>";
            }else if ($_GET["error"] == "none") {
              echo "<p class='pp'>Rejestracja przebiegła pomyślnie!</p>";
            }
          }
        ?>
    </div>
    <div id="logo">
      <img src="logo.png">
    </div>
  </body>
</html>
