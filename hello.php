<?php

class Movie
{
    
    private $name = 'Nom du film';
    private $description = 'une description';
    private $duration = 120;
    
    public function __construct($name, $desc, $duration)
    {
        $this->name = $name;
        $this->description = $desc;
        $this->duration = $duration;
        
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($desc = "")
    {
        $this->description = $desc;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }  
}

$movie = new Movie;

echo $movie->getName();
$movie->setName("Les gardiens de la galaxie Vol.2");
echo $movie->getName();