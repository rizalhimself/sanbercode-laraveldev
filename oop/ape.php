<?php
class ape extends animal
{
    public $legs = 2;
    public $teriak = "Auooooo!";
    public function yell()
    {
        return $this->teriak;
    }
}