<?php

class Production {
    public $title;
    public $language;
    public $rating;   


    function __construct($_title,$_language,$_rating)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);       
        $this->getRating($_rating);
    }

    public function getRating($rating) {
        if($rating >= 0 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            var_dump('il voto deve essere superiore a 0 e inferiore a 10');
        }
        
    }

    public function setTitle($title) {
        if($title != '') {
            $this->title = $title;
        } else {
            $this->title = 'Titolo non disponibile'; 
        }

    }   

    public function setLanguage($language) {
        if($language != '' && strlen($language) <= 3 ) {
            $this->language = $language;
        } else {
            $this->language = 'Errore inserimento lingua'; 
        }

    }  

}