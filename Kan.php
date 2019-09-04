<?php

class Kan
{
    public $jail = [];

    public function setHuman($newHuman)
    {
        $this->jail[] = $newHuman;
    }

    public function letCry($num)
    {
        $this->jail[$num]->cry();
    }
}