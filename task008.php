<?php
session_start();

if (!isset($_SESSION['transportation'])) {
  $_SESSION['transportation'] = ['Automobile', 'Jet', 'Ferry', 'Subway'];
}


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['modes'])) {
      $modes = trim($_POST['modes']);

      $newTranspo = explode(', ', $modes);
      // var_dump($newTranspo);
      $test = array_merge($_SESSION['transportation'], $newTranspo);
      print_r($test);
      
    }
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      Travel takes many forms, whether across town, across the country, or around the world.<br> Here is a list of some common modes of transportation:
    </p>
    <ul>
      <?php
          foreach ($_SESSION['transportation'] as $key => $value) {
            printf("<li>%s</li>", $value);
          }
       ?>
    </ul>

    <p>
      Please add more modes of transportation, separated by comma.
    </p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="modes">
      <input type="submit" name="mode_submit" value="Go!">
      <input type="submit" name="addmore" value="Add More?">
    </form>
  </body>
</html>
