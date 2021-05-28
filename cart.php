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

      <div>
        <table id="kosztab">
          <thead>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <th>Tytuł</th>
              <th>Cena</th>
              <th>Ilość</th>
              <th>Suma</th>
              <th></th>
            </tr>
            <?php
            if(isset($_SESSION['kosz']))
            {
            foreach($_SESSION['kosz'] as $key => $value)
            {
              $nr=$key+1;
              echo"
                <tr>
                  <td>$nr</td>
                  <td>$value[nazwa_p]</td>
                  <td>$value[cena]<input type='hidden' class='cenaa' value='$value[cena]'> zł</td>
                  <td><input class='ilosca' type='number' onchange='total()' value='$value[ilosc]' min='1'></td>
                  <td class='sumka'></td>
                  <td>
                    <form action='movies/managecart.php' method='POST'>
                    <button name='usun'>Usuń</button>
                    <input type='hidden' name='nazwa_p' value='$value[nazwa_p]'>
                  <form>
                  </td>
                </tr>
              ";
            }
          }
             ?>
          </tbody>
        </div>

        <div id="zaplac">
          <h3>Całkowity koszt zamówienia:</h3>
          <h5 id="ckoszt"></h5>
          <button type="submit" name="kup">Zamawiam i płacę</button>
        </div>

<script>

  var ck=0;

  var cenaa=document.getElementsByClassName('cenaa');
  var ilosca=document.getElementsByClassName('ilosca');
  var sumka=document.getElementsByClassName('sumka');
  var ckoszt=document.getElementById('ckoszt');

  function total()
  {
    ck=0;
    for(var i=0;i<cenaa.length;i++)
    {
      sumka[i].innerText=(cenaa[i].value)*(ilosca[i].value);

      ck=ck+(cenaa[i].value)*(ilosca[i].value);
    }
    ckoszt.innerText=ck;
  }

  total();

</script>


  </body>
</html>
