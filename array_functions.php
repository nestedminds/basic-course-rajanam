<?php

function getDuplicates($input)
{
  $array = explode(' ', $input);
  if (!is_array($array)) {
    exit('Not an array.');
  }
  $values = array_count_values($array);
  $val = array_search(max($values), $values);
  return $val;
}

function reverse($input)
{
  $array = explode(' ', $input);
  if (!is_array($array)) {
    exit('Not an array.');
  }
  $reverse = array_reverse($array);
  print_r($reverse);
}

function largestArray($array)
{
  $integer = array_map('floatval', explode(', ', $array));
  $onlyInt = array_filter($integer, 'is_numeric');

  $value = max($onlyInt);
  return $value;
}

function sortArray($array)
{
  $integer = array_map('floatval', explode(', ', $array));
  $arrayValues = array_filter($integer, 'is_numeric');
  // var_dump($onlyInt);
  asort($arrayValues);
  foreach ($arrayValues as $key  => $value) {
    echo "{$key} = {$value}<br />";
  }


}
