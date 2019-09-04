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
        echo('kansanは');
        echo($this->jail[$num]->name);
        echo('を鳴かせようと試みた');
        echo('<br>');
        $this->jail[$num]->cry();
    }
}