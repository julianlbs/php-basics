<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="isset_empty.php" method="post">
    <label>Username: </label>
    <input type="text" name="username" />
    <label>Password:</label>
    <input type="password" name="password" />
    <input type="submit" name="login" value="Login in" />
  </form>
</body>

</html>

<?php
/*
  isset() = Returns TRUE if a variable is declared an not null
  empty() = Returns TRUE if a variable is not declared, false, null, ""
*/

foreach ($_POST as $key => $value) {
  echo "{$key} = {$value} <br />";
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (empty($username)) echo "Username is missing";
  elseif (empty($password)) echo "Password is missing";
  else "Hello {$username}";
}

$username = "";

echo "<br /><br />";
if (isset($username)) echo "This variable is set<br />";
elseif (false) echo "Wow, it works!<br />";
else echo "This variable is NOT set<br />";


if (empty($username)) echo "This variable is empty";
else echo "This variable is NOT empty";
