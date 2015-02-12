<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once "header.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Sessions Example - CS418</title>
</head>
<body>

<form method="post" action="login.php">
<label for="username">Username</label>
<input type="text" name="username" />

<label for="password">Password</label>
<input type="password" name="password" />

<input type="submit" value="login" />

</form>
</body>
</html>