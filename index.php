<?php 
class Movie{
    //Attributi/proprieta/variabili
    public $title;
    public $year;
    public $description;
    //Costruttore
    function __construct($title, $year, $description){
       $this->title = $title;
       $this->year = $year;
       $this->description = $description; 
    }
    //get excerpt for post
     function getExcerpt(){
         $sub = substr($this->description, 0, 30);
         return $sub;

     }
}

//instanza movie 1 
$movie1 = new Movie('Movie','1999','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio sapien,
tincidunt ac bibendum et, tempor sit amet arcu. Praesent ut sem at purus tempus placerat sit amet id diam.
Nullam id malesuada lectus.');
var_dump($movie1);

echo $movie1->title;

echo $movie1->year;

echo $movie1->description;

echo '<p>' . $movie1->getExcerpt() . '</p>';

//instanza movie 2
$movie2 = new Movie('Movie-Movie','2020',' Mauris nec urna mattis, hendrerit lectus eget,
dictum mi. Praesent non dignissim tellus, non ullamcorper felis. Phasellus iaculis bibendum bibendum.
Duis elementum elit non pulvinar pretium.');
var_dump($movie2);

echo $movie2->title;

echo $movie2->year;

echo $movie2->description;

echo '<p>' . $movie2->getExcerpt() . '</p>';

