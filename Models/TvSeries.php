<?php
class Seasons extends Duration
{
    public $seasons;

    public function __construct($title, $language, $vote, $profits, $duration, $seasons)
    {
        parent::__construct($title, $language, $vote, $profits, $duration);
        $this->seasons = $seasons;
    }
}

$seriesSeasons = new Seasons('Breaking Bad', 'En', 9.5, "80 Milions", "62 Episodes", 5);
var_dump($seriesSeasons);