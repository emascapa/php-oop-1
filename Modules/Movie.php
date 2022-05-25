<?php 

/**
 * # Class Movie
 * a class that includes some informations about a movie
 */
class Movie {
    public $title;
    public $year;
    public $poster;
    public $vote;

    function __construct(String $title, String $year, String $poster, String $vote)
    {
        $this->title = $title;
        $this->year = $year;
        $this->poster = $poster;
        $this->vote = $vote;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getYear(){
        return $this->year;
    }
    public function getPoster(){
        return $this->poster;
    }
    public function getVote(){
        return $this->vote;
    }
    
}