<?php

$cities = [
  'Tokyo', 'Mexico City', 'New York City',
  'Mumbai', 'Seoul', 'Shanghai', 'Lagos',
  'Buenos Aires', 'Cairo', 'London'
];

foreach ($cities as $city) {
  printf("%s, ", $city);
}

sort($cities);
echo '<ul>';
foreach ($cities as $city) {
  echo "<li>{$city}</li>";
}
echo '</ul>';

array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
sort($cities);

echo '<ul>';
foreach ($cities as $city) {
  echo "<li>{$city}</li>";
}
echo '</ul>';
