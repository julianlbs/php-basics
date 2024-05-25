<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2>Welcome to Fakebook</h2>
    <label for="username">Username:</label><br />
    <input type="text" name="username" /><br />
    <label for="password">Password:</label><br />
    <input type="password" name="password" /><br />
    <input type="submit" name="submit" value="Register" />
  </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  if (empty($username) || empty($password)) {
    echo "Please enter a username and password.";
  } else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
      $result = mysqli_query($conn, $sql);
      echo "Registration successful.";
    } catch (mysqli_sql_exception $e) {
      echo "Username already exists.";
    }
  }
}

mysqli_close($conn);
