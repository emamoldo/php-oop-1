<?php
class Seasons extends Production
{
    public $seasons;

    public function __construct($title, $language, $vote, $seasons)
    {
        parent::__construct($title, $language, $vote);
        $this->seasons = $seasons;
    }
}

$seriesSeasons = new Seasons('Breaking Bad', 'En', 9.5, 5);
// var_dump($seriesSeasons);