<?php


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






