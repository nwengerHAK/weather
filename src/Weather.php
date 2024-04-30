<?php
namespace nwengerhak\weather;
Class Weather{

    private array $weather = [
        "2024-04-01" => "Sonnig",
        "2024-04-02" => "Bewölkt",
        "2024-04-03" => "Regen",
        "2024-04-04" => "Bewölkt",
        "2024-04-05" => "Sonnig",
        "2024-04-06" => "Regen",
        "2024-04-07" => "Sonnig",
        "2024-04-08" => "Bewölkt",
        "2024-04-09" => "Sonnig",
        "2024-04-10" => "Sonnig",
        "2024-04-11" => "Regen",
        "2024-04-12" => "Bewölkt",
        "2024-04-13" => "Sonnig",
        "2024-04-14" => "Bewölkt",
        "2024-04-15" => "Regen",
        "2024-04-16" => "Sonnig",
        "2024-04-17" => "Bewölkt",
        "2024-04-18" => "Sonnig",
        "2024-04-19" => "Sonnig",
        "2024-04-20" => "Regen",
        "2024-04-21" => "Bewölkt",
        "2024-04-22" => "Sonnig",
        "2024-04-23" => "Bewölkt",
        "2024-04-24" => "Regen",
        "2024-04-25" => "Sonnig",
        "2024-04-26" => "Bewölkt",
        "2024-04-27" => "Sonnig",
        "2024-04-28" => "Sonnig",
        "2024-04-29" => "Regen",
        "2024-04-30" => "Bewölkt"
];

    public function getWeather(): array
    {
        foreach ($this->weather as $weatherday) {
            $this->weather[] = $weatherday;
            return $weatherday;
        };

    }

    public function getWeatherByDay(string $day): array{
        return $this->weather[$day];
    }

    public function addWeather(string $day, string $weathertoday): void{
        $this->weather[$day] = $weathertoday;
    }


}