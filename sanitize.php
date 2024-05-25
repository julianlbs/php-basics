<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="sanitize.php" method="post">
    <label>Username:</label> <input type="text" name="username" /><br />
    <label>Age:</label> <input type="text" name="age" /><br />
    <input type="submit" name="login" value="Login" />
  </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
  echo "Hello {$username}. You are {$age} years old! <br />";

  $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
  if (empty($age)) echo "That number wasn't valid";
  else "You are $age years old";
}
