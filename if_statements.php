<?php
$age = 0;

if ($age >= 18) {
  echo "You my enter this site";
} elseif ($age == 0) {
  echo "You were just born";
} else {
  echo "You must be 18+ to enter";
}


/*
  Logical operators = combine conditional statements
  if (!condition1)

  && = True if both conditions are true
  || = True if at least one condition is true
  ! = True if false. False if true
*/