<?php

if (!isset($argv)) {
  exit('The script must be run from the command line');
}
print('Please provide an array of numbers: ');

$values = fgets(STDIN);

function sortArray($array)
{
  $integer = array_map('floatval', explode(', ', $array));

  $arrayValues = array_values(array_filter($integer, 'is_numeric'));

  $container = [];
  foreach ($arrayValues as $value) {
    if ($value == 0) {
      exit('You must only use number.');
    }
    $container[] = $value;
  }
  asort($container);
  print_r($container);
}

echo 'The values are sorted in ascending order' . sortArray($values);
