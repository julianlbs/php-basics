<?php
$full_name = "         John Doe       ";
echo $full_name;
echo "<br />";

$full_name = strtolower($full_name);
echo $full_name;
echo "<br />";

$full_name = strtoupper($full_name);
echo $full_name;
echo "<br />";

$full_name = trim($full_name);

echo $full_name;
echo "<br />";

$full_name = str_pad($full_name, 20, "/");
echo $full_name;
echo "<br />";

$full_name = str_replace("O", "*", $full_name);
echo $full_name;
echo "<br />";
