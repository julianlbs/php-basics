<?php

$db_hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "businessdb";
$conn = "";

try {
  $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_name);
} catch (Exception $e) {
  echo "Could not connect!<br />";
}

if ($conn) echo "You are connected<br />";
