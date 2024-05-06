<?php

namespace nwengerhak\weather;

class Day
{
    private string $day;
    private string $weather;

    public function getWeather(): string
    {
        return $this->weather;
    }

    public function getTag(): string
    {
        return $this->day;
    }

    public function setTag(string $day): void
    {
        $this->day = $day;
    }

    public function __construct($day, $weather)
    {
        $this->day = $day;
        $this->weather = $weather;
    }

}