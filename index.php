<?php

use nwengerhak\weather\Weather;

require 'vendor/autoload.php';

$w = new Weather();
echo $w->getWeatherByDay("2024-04-13");