<?php
setcookie("fav_food", "pizza", time() + 86400 * 2, "/");
setcookie("fav_drink", "coffe", time() + 86400 * 3, "/");

// To delete a cookie, you just have to set time to: time() - 0.
setcookie("fav_food", "pizza", time() - 0, "/");

foreach ($_COOKIE as $key => $value) {
  echo "{$key} = {$value} <br />";
}

if (isset($_COOKIE["fav_food"])) echo "BUY SOME {$_COOKIE["fav_food"]}";
else echo "I don't know your favorite food";
