<?php

use Nwengerhak\Weather\History;
use Nwengerhak\Weather\Day;
require 'vendor/autoload.php';

$day1 = new Day('2024-04-30', 'cloudy');
$day2 = new Day('2024-05-1', 'sunny');
$day3 = new Day('2024-05-2', 'windy');

$history = new History($day1);
$history->addToHistory($day2);
$history->addToHistory($day3);

foreach ($history->getHistory() as $item) {
    echo $item->getWeather(). " " . $item->getDay()."</br>";
}

echo $history->getDay('2024-04-30') . '<br/>';
echo $history->getDay('2024-05-1') . '<br/>';
echo $history->getDay('2024-05-2');
