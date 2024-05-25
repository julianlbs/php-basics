<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="superglobals.php" method="post">
    <label>Name: </label>
    <input type="text" name="name" />
    <label>Age: </label>
    <input type="text" name="age" />
    <input type="submit" name="submit" value="submit" />
  </form>
</body>

</html>

Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
You are <?php echo (int)$_POST["age"]; ?> years old.

<?php
echo "<br /><br/>";
echo $_SERVER['HTTP_USER_AGENT'];

if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
?>

  <h3>str_contains() returned true</h3>
  <p>You are using Firefox</p>

<?php
} else {
?>

  <h3>str_contains() returned False</h3>
  <p>You are not using Firefox</p>

<?php
}
?>