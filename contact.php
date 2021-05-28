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

    <div id="headerA">
        <h1>KONTAKT</h1>
    </div>

    <div id="kont">
      <h2>Adres: Wspólna 42, 05-075 Warszawa</h2><br>
      <h2>Tel: 123 456 789</h2><br>
      <h2>Email: watchwithme@kontakt.pl</h2><br>
      <h2>Wsparcie klienta: wsparcie@watchwithme.pl</h2><br><br><br>
      <h2>NIP: 5842751979</h2><br>
      <h2>REGON: 365095696</h2><br>
    </div>

    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.76223137043!2d21.190592115945574!3d52.24770226412538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ed22a8420e001%3A0x89bd09176f892285!2sNa%20Wsp%C3%B3lnej!5e0!3m2!1spl!2spl!4v1614539373574!5m2!1spl!2spl" width="696px" height="396px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

  </body>
</html>
