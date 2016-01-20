<?php

if (!isset($argv)) {
  exit('The script must be run from the command line');
}
print('Please provide number values: ');

$values = fgets(STDIN);

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
print 'The most frequent number is: ' . getDuplicates($values);
