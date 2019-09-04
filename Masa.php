<?php
require_once('./Human.php');

class Masa extends Human
{
    public function greeting()
    {
        echo('こんにちは');
        echo('<br>');
    }
    public function calcBmi()
    {
        $this->Bmi();
    }
    private function Bmi()
    {
        $bmi = $this->weight / ($this->tall * $this->tall);
        echo('BMIは');
        echo($bmi);
        echo('です');
        echo('<br><br>');
    }
}
