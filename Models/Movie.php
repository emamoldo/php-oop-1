<?php
class Profits extends General
{
    public $profits;

    public function __construct($title, $language, $vote, $profits)
    {
        parent::__construct($title, $language, $vote);
        $this->profits = $profits;
    }
}

$movieProfits = new Profits('Matrix', 'EN', 9, "281 Milions");
// var_dump($movieProfits);

class Duration extends Profits
{
    public $duration;

    public function __construct($title, $language, $vote, $profits, $duration)
    {
        parent::__construct($title, $language, $vote, $profits);
        $this->duration = $duration;
    }
}

$movieDuration = new Duration('Matrix', 'EN', 9, "281 Milions", "136 minuts");
// var_dump($movieDuration);

// TODO: let the new class use the old title, language and vote;