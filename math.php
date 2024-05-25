<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="math.php" method="post">
    <label>X:</label>
    <input type="text" name="x" />
    <label>y:</label>
    <input type="text" name="y" />
    <label>x:</label>
    <input type="text" name="z" />
    <input type="submit" value="total">
  </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($x);
$rounded = round($x);
$floor_res = floor($x);
$ceil_res = ceil($x);
$sqrt_x = sqrt($x);
$max = max($x, $y, $z);
$random = rand();

$power = pow($x, $y);

echo "x: {$x} <br />";
echo "absolute: {$total} <br />";
echo "rounded: {$rounded} <br />";
echo "floor: {$floor_res} <br />";
echo "ceil: {$ceil_res} <br />";
echo "max: {$max} <br />";
echo "random: {$random} <br />";
echo "square root of x: {$sqrt_x} <br />";
echo "power(x^y): {$power} <br />";
