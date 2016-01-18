<?php

require_once('array_functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['frequent'])) {
    $input = $_POST['test'];
    $duplicates = getDuplicates($input);
  } elseif (isset($_POST['reverse'])) {
    $input = $_POST['test'];
    reverse($input);
  } elseif (isset($_POST['largest'])) {
    $input = $_POST['test'];
    echo largestArray($input);
  } elseif (isset($_POST['sort'])) {
    $input = $_POST['test'];
    $input = sortArray($input);
  }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Test</title>
  </head>
  <body>
    <?php
      if (isset($duplicates)) {
        echo $duplicates;
      }
    ?>
    <form class="#" action="#" method="post">
      <input type="text" name="test">
      <input type="submit" name="frequent" value="Frequent">
      <input type="submit" name="reverse" value="Reverse">
      <input type="submit" name="largest" value="Largest">
      <input type="submit" name="sort" value="Sort">
    </form>
  </body>
</html>
