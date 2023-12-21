<?php
class frog extends animal
{
    public $lompat = "Hop Hop!";
    public function jump()
    {
        return $this->lompat;
    }
}