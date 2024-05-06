<?php
namespace nwengerhak\weather;
use NwengerHak\weather\Day;
class History
{
    private array $history = [];

    public function getVerlauf(): array
    {
        return $this->history;
    }

    public function addToVerlauf(Day $day): void
    {
        array_push($this->history,$day);
    }

    public function __construct(Day $tag)
    {
        array_push($this->history,$tag);

    }
    public function getDay($date):string{
        foreach($this->history as $item){
            if($item->getTag() === $date){
                return $item->getWeather();
            }
        }
    }

}