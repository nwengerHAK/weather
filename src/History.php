<?php
namespace Nwengerhak\Weather;
use NwengerHak\Weather\Day;

class History
{
    private array $history = [];

    public function getHistory(): array
    {
        return $this->history;
    }

    public function addToHistory(Day $day): void
    {
        array_push($this->history,$day);
    }

    public function __construct(Day $tag)
    {
        array_push($this->history,$tag);

    }
    public function getDay($date):string{
        foreach($this->history as $item){
            if($item->getDay() === $date){
                return $item->getWeather();
            }
        }
    }

}