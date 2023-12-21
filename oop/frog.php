<?php
class frog extends animal
{
    public $cold_blooded = "Yes";
    public $lompat = "Hop Hop!";
    public function jump()
    {
        return $this->lompat;
    }
}