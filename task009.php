<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iterator</title>
  </head>
  <body>
    <h2>Please choose a city:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <select name="countries">
        <option value="">Select a City</option>
        <?php

          $cities = [
            'Japan' => 'Tokyo',
            'Mexico' => 'Mexico City',
            'USA' => 'New York City',
            'India' => 'Mumbai',
            'Korea' => 'Seoul',
            'China' => 'Shanghai',
            'Nigeria' => 'Lagos',
            'Argentina' => 'Buenos Aires',
            'Egypt' => 'Cairo',
            'England' => 'London'
          ];

          foreach ($cities as $countryKey => $cityValue) {
        ?>
        <option value="<?= $countryKey ?>"><?= $cityValue ?></option>
        <?php
            }
        ?>
      </select>
      <input type="submit" name="country" value="Submit">
    </form>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $select = isset($_POST['countries']) ? $_POST['countries'] : false;

  if ($select) {
    printf("The city %s is in the country %s<br />", $cities[$_POST['countries']], $select);
    var_dump($cities[$_POST['countries']]);
  }

}


    ?>
  </body>
</html>
