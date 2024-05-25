<?php
// variable = a reusable container that holds data
// string, integer, float, boolean
$name = "John Doe";
$food = "Pizza";
$email = "jhon@gmail.com";

$age = 21;
$gpa = 2.5;
$price = 4.99;
$quantity = 3;

$employed = true;
$online = false;

$total = null;

echo "Hello {$name} <br />";
echo "You like {$food} <br />";
echo "You email is {$email} <br />";
echo "You are {$age} years old <br />";
echo "Your GPA is {$gpa} <br />";
echo "Your pizza is \${$price} <br />";
echo "Online status: {$online} <br />";

echo "You have ordered {$quantity} x {$food}s <br />";
$total = $quantity * $price;
echo "Your total is \${$total} <br />";
