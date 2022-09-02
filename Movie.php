<?php 
class Movie{
    private $title; 
    private $gender; 
    private $minutes; 
    private $movieDirector; 


    function __construct($_title, $_gender, $_minutes, $_movieDirector){
       $this->title = $_title;
       $this->gender = $_gender;
       $this->minutes = $_minutes;
       $this->movieDirector = $_movieDirector;
    }


    public function getTitle(){
        return $this->title;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getMinutes(){
        return $this->minutes;
    }

    public function getmovieDirector(){
        return $this->movieDirector;
    }
}