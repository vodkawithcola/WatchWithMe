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
          echo "<li><p><a href='../cart.php' class='ab'><i class='fas fa-shopping-cart fa-1x'></i></a></p></li>";
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
      <b>TENET</b><br><br>
      <b>79.00 zł</b><br><br><br>
      <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
      <input type="hidden" name="nazwa_p" value="TENET">
      <input type="hidden" name="cena" value="79.00">
      </form>
      </div>
     </div>

 <div class="a" id="md">
   <div class="photo"><br>
    <form action="managecart.php" method="POST">
     <img src="posters/alien.jpg" class="poster">
     <b>OBCY</b><br><br>
     <b>39.00 zł</b><br><br><br>
     <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
     <input type="hidden" name="nazwa_p" value="OBCY">
     <input type="hidden" name="cena" value="39.00">
     </form>
   </div>
 </div>

 <div class="a" id="md">
   <div class="photo"><br>
     <form action="managecart.php" method="POST">
     <img src="posters/Interstellar.jpg" class="poster">
     <b>Interstellar</b><br><br>
     <b>39.00 zł</b><br><br><br>
     <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
     <input type="hidden" name="nazwa_p" value="Interstellar">
     <input type="hidden" name="cena" value="39.00">
     </form>
   </div>
 </div>

 <div class="a" id="md">
   <div class="photo"><br>
     <form action="managecart.php" method="POST">
     <img src="posters/tdk.jpg" class="poster">
     <b>Mrocny Rycerz</b><br><br>
     <b>29.00 zł</b><br><br><br>
     <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
     <input type="hidden" name="nazwa_p" value="Mroczny Ryczerz">
     <input type="hidden" name="cena" value="19.00">
     </form>
   </div>
 </div>

 <div class="a" id="md">
   <div class="photo"><br>
     <form action="managecart.php" method="POST">
     <img src="posters/aiw.jpg" class="poster">
     <b>Avengers</b><br>
     <b>Wojna bez granic</b><br><br>
     <b>49.00 zł</b><br><br>
     <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
     <input type="hidden" name="nazwa_p" value="Avengers Wojna bez granic">
     <input type="hidden" name="cena" value="49.00">
     </form>
   </div>
 </div>


 <div class="a" id="md">
   <div class="photo"><br>
     <form action="managecart.php" method="POST">
     <img src="posters/ae.jpg" class="poster">
     <b>Avengers</b><br>
     <b>Koniec gry</b><br><br>
     <b>59.00 zł</b><br><br>
     <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
     <input type="hidden" name="nazwa_p" value="Avengers Koniec Gry">
     <input type="hidden" name="cena" value="59.00">
     </form>
   </div>
 </div>

 <div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/midsommar.jpg" class="poster">
    <b>Midsommar</b><br><br><br>
    <b>39.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Midsommar">
    <input type="hidden" name="cena" value="39.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/tc.jpg" class="poster">
    <b>Obecność</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Obecność">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/tc2.jpg" class="poster">
    <b>Obecność 2</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Obecność 2">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/cn.jpg" class="poster">
    <b>Cicha Noc</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Cicha Noc">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/jns.jpg" class="poster">
    <b>Jak najdalej stąd</b><br><br><br>
    <b>39.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Jak najdalej Stąd">
    <input type="hidden" name="cena" value="39.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/kler.jpg" class="poster">
    <b>Kler</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Kler">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/mc.jpg" class="poster">
    <b>McImperium</b><br><br><br>
    <b>29.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="McImperium">
    <input type="hidden" name="cena" value="29.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/ff.jpg" class="poster">
    <b>Szybcy i Wściekli 1-8</b><br><br><br>
    <b>89.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Szybcy i wściekli: Kolekcja 1-8">
    <input type="hidden" name="cena" value="89.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/hp.jpg" class="poster">
    <b>Harry Potter 1-7</b><br><br><br>
    <b>79.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Harry Potter: Kolekcja 1-7">
    <input type="hidden" name="cena" value="79.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/zak.jpg" class="poster">
    <b>Zakonnica</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Zakonnica">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/an.jpg" class="poster">
    <b>Annabelle</b><br><br><br>
    <b>14.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Annabelle">
    <input type="hidden" name="cena" value="14.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/mia.jpg" class="poster">
    <b>Marley i ja</b><br><br><br>
    <b>9.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Marley i ja">
    <input type="hidden" name="cena" value="9.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/dd.jpg" class="poster">
    <b>Duże dzieci 1-2</b><br><br><br>
    <b>9.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Duże dzieci: Kolekcja 1-2">
    <input type="hidden" name="cena" value="9.00">
    </form>
  </div>
</div>

<div class="a" id="md">
  <div class="photo"><br>
    <form action="managecart.php" method="POST">
    <img src="posters/top.jpg" class="poster">
    <b>Klątwa La Llorony</b><br><br><br>
    <b>19.00 zł</b><br><br>
    <button type="submit" name="do_koszyka" class="button">Dodaj do koszyka</button>
    <input type="hidden" name="nazwa_p" value="Topielisko. Klątwa La Llorony">
    <input type="hidden" name="cena" value="19.00">
    </form>
  </div>
</div>


  </body>
</html>
