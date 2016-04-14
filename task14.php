<?php

$browserTypes = [
  'None', 'FireFox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera'
];

$speeds = [
  'Unknown', 'DSL', 'T1', 'Cable', 'Dial Up', 'Other'
];

$os = [
  'Windows', 'Linux', 'Macintosh', 'Other'
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
    echo '</select><br />';
  }

}

if (isset($_POST['submit'])) {
  $name = trim($_POST['name']);
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $browser = trim($_POST['browser']);

  echo "The values you entered are: {$name}, {$username}, {$email}, {$browser}<br />";
  echo 'Work Access<br />';
  echo '<ul>';
  echo '<li>'. $_POST['speeds'] .'</li>';
  echo '<li>'. $_POST['os'] .'</li>';
  echo '</ul>';


}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Class</title>
  </head>
  <body>
    <div class="form-container">
      <form class="" action="task14.php" method="post">
          <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"><br />
          <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"><br />
          <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br />
          <?php
            $selectBrowser = new Select();
            $selectBrowser->setName('browser');
            echo '<p>Work Access</p>';
            if (isset($browserTypes)){
                $selectBrowser->setValue($browserTypes);
                $selectBrowser->makeSelect();
                unset($selectBrowser);
            }
            echo '<p>Connection Speed</p>';
            $selectSpeed = new Select();
            $selectSpeed->setName('speeds');
            if (isset($speeds)) {
              $selectSpeed->setValue($speeds);
              $selectSpeed->makeSelect();
              unset($selectSpeed);
            }
            echo '<p>Operating System</p>';
            $selectOs = new Select();
            $selectOs->setName('os');
            if (isset($os)) {
              $selectOs->setValue($os);
              $selectOs->makeSelect();
              unset($selectOs);
            }
          ?>
          <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
