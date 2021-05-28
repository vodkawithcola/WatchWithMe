<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['do_koszyka']))
  {
    if(isset($_SESSION['kosz']))
    {
      $myitmes=array_column($_SESSION['kosz'],'nazwa_p');
      if(in_array($_POST['nazwa_p'],$myitmes))
      {
        echo"<script>alert('Przedmiot znajduje się już w koszyku');
        window.location.href='main.php';
        </script>";
      }else{

      $count=count($_SESSION['kosz']);
      $_SESSION['kosz'][$count]=array(
          'nazwa_p' => $_POST['nazwa_p'],
          'cena' => $_POST['cena'],
          'ilosc' => 1);
          echo"<script>alert('Wybrany produkt został dodany do koszyka');
          window.location.href='main.php';
          </script>";
        }
    }else{
      $_SESSION['kosz'][0]=array(
          'nazwa_p' => $_POST['nazwa_p'],
          'cena' => $_POST['cena'],
          'ilosc' => 1);
          echo"<script>alert('Wybrany produkt został dodany do koszyka');
          window.location.href='main.php';
          </script>";
    }
  }
  if(isset($_POST['usun']))
  {
    foreach($_SESSION['kosz'] as $key => $value)
    {
      if($value['nazwa_p']==$_POST['nazwa_p'])
      {
        unset($_SESSION['kosz'][$key]);
        $_SESSION['kosz']=array_values($_SESSION['kosz']);
        echo"<script>
          alert('Przedmiot został usunięty z koszyka');
          window.location.href='../cart.php';
          </script>
        ";
      }
    }
  }
}



 ?>
