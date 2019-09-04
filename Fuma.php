<?php
require_once('./Human.php');

class Fuma extends Human
{
    public function greeting()
    {
        echo('おっす');
        echo('<br>');
    }
    public function selfIntroduction()
    {
        echo('僕の名前は');
        echo($this->name);
        echo('です');
        echo('<br>');
        $this->details();
    }
    private function details()
    {
        echo('歳は' . $this->age . 'です');
        echo('<br>');
        echo('身長は' . $this->tall . 'です');
        echo('<br>');
        echo('体重は' . $this->weight . 'です');
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
