<?php

if (!isset($argv)) {
  exit('The script must be run from the command line');
}
print('Please provide an array of numbers: ');

$values = fgets(STDIN);

function largestArray($array)
{
  $integer = array_map('floatval', explode(', ', $array));
  $onlyInt = array_filter($integer, 'is_numeric');
  
  foreach ($onlyInt as $key => $value) {
    if ($value == 0) {
      exit('Array must only be integer or float.');
    }
  }
  $value = max($onlyInt);
  return $value;
}

echo 'The largest value on the array is: ' . largestArray($values);
