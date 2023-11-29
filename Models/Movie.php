<?php 
require_once __DIR__ . '/Production.php';

class Movie extends Production {
    public $profit;
    public $duration;

    function __construct($_title,$_language,$_rating,$_profit,$_duration) {

        parent::__construct($_title,$_language,$_rating);
        $this-> setProfit($_profit);
        $this-> setDuration($_duration);
    }    

    public function SetProfit($profit) {
        $this->profit = $profit;
    }

    public function SetDuration($duration) {
        $this->duration = $duration;
    }

}