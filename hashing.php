<?php
/*
  Hashing:
    Transforming sensitive data (password) into letters, numbers, and/or symbols
    via a methematical proccess. (similar to encryption).
    It's a one-way process and hides the original data from 3rd parties.
*/

$password = "pizza";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br />";

if (password_verify("pizza", $hash)) {
  echo "You are logged in!";
} else {
  echo "Wrong password!";
}
