<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['city'])) {
    echo $_POST['city'];
  } else {
    exit('You forgot to enter something...');
  }
}
