<?php 
    class Movie {
        private $title;
        private $year;
        private $runningTime;
        private $actors;
        private $productionCompany;
        private $rating;

        public function __construct($title, $year, $runningTime, $actors, $productionCompany, $rating) {
            $this->title = $title;
            $this->year = $year;
            $this->runningTime = $runningTime;
            $this->actors = $actors;
            $this->productionCompany = $productionCompany;
            $this->rating = $rating;
        }
    }
?>