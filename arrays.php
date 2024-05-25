<?php
$foods = array("apple", "orange", "banana", "coconut");

echo $foods[0] . "<br /><br />";

array_push($foods, "pineapple", "kiwi", "strawberry");

array_pop($foods);
array_shift($foods);

foreach ($foods as $food) {
  echo $food . "<br />";
}

$reversed_foods = array_reverse($foods);
echo "<br /><br />";

foreach ($reversed_foods as $food) {
  echo $food . "<br />";
}

echo "<br />";
echo count($foods);
