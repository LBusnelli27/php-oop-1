<?php 
    class Movie {
        private $title;
        private $year;
        private $runningTime;
        private $actors;
        private $productionCompany;
        private $genre;

        public function __construct($title, $year, $runningTime, $actors, $productionCompany, $genre) {
            $this->title = $title;
            $this->year = $year;
            $this->runningTime = $runningTime;
            $this->actors = $actors;
            $this->productionCompany = $productionCompany;
            $this->genre = $genre;
        }


        public function setTitle($title) {
            $this->title = $title;
        }
        public function setYear($year) {
            $this->year = $year;
        }
        public function getTitle() {
            return $this->title;
        }
    }


    $filmShutterIsland = new Movie('Shutter Island', 2010, '138 min', 'Leonardo Di Caprio', 'Paramount Pictures', 'Thriller');
    $filmTheWolfOfWallStreet = new Movie('The Wolf of Wall Street', 2014, '180 min', 'Leonardo Di Caprio', 'Appian Way Productions', 'Biografia');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First OOP</title>
</head>
<body>
    <p><?php var_dump($filmShutterIsland) ?></p>
    <p><?php var_dump($filmTheWolfOfWallStreet) ?></p>
</body>
</html>