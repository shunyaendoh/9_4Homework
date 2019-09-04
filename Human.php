<?php

class Human
{
    public $name,
           $age,
           $tall,  // メートル表記
           $weight;
           
    public function greeting()
    {
        echo('こんにちは');
        echo('<br>');
    }
    public function __construct($name, $age, $tall, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->tall = $tall;
        $this->weight = $weight;
        echo('新しいニンゲンが創られた');
        echo('<br>');
    }
    public function selfIntroduction()
    {
        echo('私の名前は');
        echo($this->name);
        echo('です');
        echo('<br>');
        $this->secretDetails();
    }
    private function secretDetails()
    {
        echo('歳は秘密です');
        echo('<br>');
        echo('身長は秘密です');
        echo('<br>');
        echo('体重は秘密です');
        echo('<br>');
    }
    public function calcBmi()
    {
        $this->secretBmi();
    }
    private function secretBmi()
    {
        echo('BMIは秘密です');
        echo('<br>');
    }
    public function cry()
    {
        echo($this->name);
        echo('は鳴いた<br>うわーん<br>');
    }
}