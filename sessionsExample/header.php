<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

session_start();

include_once "db.php";

if($_POST && check_login($_POST['username'],$_POST['password'])){
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['loggedIn'] = True;
   
   header("location: index.php");
   exit();
   session_write_close();
}elseif($_POST) {
  echo "Unsuccessful login";
}else {
  echo "You're not logged in";
}

?>






