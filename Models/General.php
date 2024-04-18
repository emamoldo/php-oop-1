<?php
// This is the class
class General
{
    public $title;
    public $language;
    public $vote;


    public function __construct($title, $language, $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

    // public function getTitle()
    // {
    //     echo $this->title;
    // }

    // $italy->title = "Italia";
    // $italy->language = "Italiano";
    // $italy->vote = "9";
}






