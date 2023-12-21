<?php
class animal
{
    public $name;
    public $legs = 4;
    public $cold_blooded = "No";
    public function __construct ($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLegs()
    {
        return $this->legs;
    }
    public function getColdBlooded()
    {
        return $this->cold_blooded;
    }
}

