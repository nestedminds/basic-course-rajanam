<?php

$browserTypes = [
  'FireFox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera'
];

class Select
{
  /**
   * Name of the select field.
   */
  public $name;

  /**
   * Values for the option field.
   */
  public $value = '';

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setValue($value)
  {
    if (!is_array($value)) {
      exit("The given value {$value} is not an array.");
    }
    $this->value= $value;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function makeOptions($optionValue)
  {
    foreach ($optionValue as $value) {
      echo "<option value=\"{$value}\">{$value}</option>";
    }
  }

  public function makeSelect()
  {
    echo '<select name="'. $this->getName().'">';
    $this->makeOptions($this->getValue());
    echo '</select>';
  }

}

if (isset($_POST['submit'])) {
  $name = trim($_POST['name']);
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $browser = trim($_POST['browser']);

  echo "The values you entered are: {$name}, {$username}, {$email}, {$browser}";

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Class</title>
  </head>
  <body>
    <form class="" action="task13.php" method="post">
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
        <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <?php
          $select = new Select();
          $select->setName('browser');
          if (isset($browserTypes)){
              $select->setValue($browserTypes);
              $select->makeSelect();
          }
        ?>
        <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
