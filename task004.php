<?php

if (!isset($argv)) {
  exit('The script must be run from the command line');
}
print('Please provide an array of numbers to reverse: ');

$values = fgets(STDIN);

function reverse($input)
{
  $array = explode(' ', $input);
  if (!is_array($array)) {
    exit('Not an array.');
  }
  $reverse = array_reverse($array);
  print_r($reverse);
}
echo 'Your array has been reversed!' . reverse($values);
