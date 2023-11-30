<?php 
require_once __DIR__ . '/Production.php';

class Serie extends Production {
    public $season;

    function __construct($_title,$_language,$_rating,$_season) {

        parent::__construct($_title,$_language,$_rating);
        $this-> setSeason($_season);
    }    

    public function setSeason($_season) {
        $this->season = $_season;
    }

    public function getSeason() {
        return $this->season; 
    }

   
}