<?php

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $pwdr = $_POST["pwdr"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputSingup($name, $email, $username, $pwd, $pwdr) !== false){
    header("location: ../register.php?error=emptyinput");
    exit();
  }
  if(invalidUid($username) !== false) {
    header("location: ../register.php?error=invaliduid");
    exit();
  }
  if(invalidEmail($email) !== false) {
    header("location: ../register.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($pwd, $pwdr) !== false) {
    header("location: ../register.php?error=passworddontmatch");
    exit();
  }
  if(uidExists($conn, $username, $email) !== false) {
    header("location: ../register.php?error=usernametaken");
    exit();
  }
  createUser($conn, $name, $email, $username, $pwd);
}
else{
  header("location: ../register.php");
}
