<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WatchWithMe</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../css.css">
	<link rel="stylesheet" href="../slider.css">
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
    <div id="head">
      <div>
      <ul>
        <li><p><a href="main.php" class="ab">Filmy</a></p></li>
        <li><p><a href="acs.php" class="ab">Akcesoria</a></p></li>
        <li><p>Nowości</p></li>
        <li><p><a href="../about.php" class="ab">O nas</a></p></li>
        <li><p><a href="../contact.php" class="ab">Kontakt</a></p></li>
      </ul>
    </div>
    <div>
      <ul>
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<li><p><a href='profile.php' class='ab'>Profil</a></p></li>";
            echo "<li><p><a href='cart.php' class='ab'><i class='fas fa-shopping-cart fa-1x'></i></a></p></li>";
            echo "<li><p><a href='../include/logout.inc.php' class='ab'>Wyloguj się</a></p></li>";
          }else{
            echo "<li><p><a href='../login.php' class='ab'>Zaloguj się</a></p></li>";
            echo "<li><p><a href='../register.php' class='ab'>Zarejestruj się</a></p></li>";
          }
         ?>
      </ul>
    </div>
    </div>

    <div id="kategoria">
    </div>

    <div class="a" id="md">
      <form action="managecart.php" method="POST">
      <div class="photo"><br>
      <img src="posters/tenet.jpg" class="poster">
      <b>TENET</b><br>
      <b>PLAKAT</b><br><br>
      <b>79.00 zł</b><br><br>
      <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
      <input type="hidden" name="nazwa_p" value="TENET - PLAKAT">
      <input type="hidden" name="cena" value="19.00">
      </form>
      </div>
     </div>

  </body>
</html>
