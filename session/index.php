<?php
/*
  session:
    SGB used to store information on a user
    to be used across multiple pages.
    A user is assigned a session-id.
    ex. login credentials
*/

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>Username:</label><br />
    <input type="text" name="username" /><br />
    <label>Password:</label><br />
    <input type="password" name="password" /><br />
    <input type="submit" name="login" value="login" /><br />
  </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    header("Location: home.php");
  } else {
    echo "Missing username/password <br />";
  }
}
