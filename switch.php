<?php
$grade = "B";

switch ($grade) {
  case "A":
    echo "You did great";
    break;
  case "B":
    echo "You did good";
    break;
  case "C":
    echo "You did okay";
    break;
  case "D":
    echo "You did poorly";
    break;
  case "C":
    echo "You failed";
    break;
  default:
    echo "{$grade} is no valid";
}

$date = date("l");
echo "<br /> {$date} <br />";
