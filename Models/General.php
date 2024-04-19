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

    // For the title
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }


    // For the Language
    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    // For the Vote

    public function getVote()
    {
        return $this->vote;
    }

    public function setVote($vote)
    {
        $this->vote = $vote;
    }


}






