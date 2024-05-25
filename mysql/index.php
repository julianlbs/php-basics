<?php
/*
  Ways to connect to a MySQL DB:
  1. MySQLi extension
  2. PDO (PHP Data Objects)
*/

include("database.php");

$username = "John Doe";
$password = "password1234";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

try {
  mysqli_query($conn, $sql);
  echo "User registered<br />";
} catch (mysqli_sql_exception) {
  echo "Could not register user";
}


mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Hello</p><br />
</body>

</html>