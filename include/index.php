<?php

/*
  include() - Copies the content of a file (php/html/text) and includes it in your php file. 
  Sections of your website become reusable
  Changes only need to be made in one place
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  include("header.html");
  ?>

  <p>This is the Home Page</p><br />
  <p>Stuff about your home page can go here</p><br />

  <?php
  include("footer.html");
  ?>
</body>

</html>