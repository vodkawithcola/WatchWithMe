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

    <div id="critis">
      <img src="critis.jpg">
    </div>

    <div id="tekst">
      Jesteśmy szybko rozwijającą się firmą, która stara się zapewnić klientą wysokiej jakości  produkty filmowe i zapewnić im niesmaowite wieczory spędzone przez ekranem filmowych atrakcji.
    </div>

    <div id="joker">
      <img src="joker.png">
    </div>

    <div id="tekstA">
      Nasza baza filmowa jest stale rozwijana! Jako nowy sklep na chwilę obecną jesteśmy w stanie zapewnić dostęp do ponad 20 filmów i baza jest stale powiększana. Mamy nadzieję, że każdy kinomaniak znajdzie coś dla siebie!
    </div>

    <div id="audience">
      <img src="audience.png">
    </div>

    <div id="tekstB">
      Zapewniamy szybką i bezpieczną przesyłkę do klienta. Gwarantujemy, że twój produkt dojdzie do ciebie w całości i bez opóźnień!
    </div>

  </body>
</html>
