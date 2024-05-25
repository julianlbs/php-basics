<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="associative_array.php" method="post">
    <label>Enter a country</label>
    <input type="text" name="country" />
    <input type="submit" value="Submit" />
  </form>
</body>

</html>

<?php
/*  
  Associative array is an array made of key=>value pairs

  countries => capitals
  id => username
  item => price
*/

$capitals = array(
  "USA" => "Washington D.C.",
  "Japan" => "Kyoto",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];
echo "The capital is {$capital}";
echo "<br /><br />";

$capitals["USA"] = "Las Vegas";

foreach ($capitals as $key => $value) {
  echo "{$key} | {$value} <br />";
}

$keys = array_keys($capitals);
$values = array_values($capitals);

echo "<br />";
foreach ($keys as $key) {
  echo "key: {$key} | value: {$capitals[$key]} <br />";
}


$flipped_capitals = array_flip($capitals);
echo "<br />";
foreach ($flipped_capitals as $key => $value) {
  echo "{$key} | {$value} <br />";
}
