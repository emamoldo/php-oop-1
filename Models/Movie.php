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
var_dump($movieProfits);