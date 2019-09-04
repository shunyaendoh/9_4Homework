<?php
// ファイルの読み込み
require_once('./Human.php');
require_once('./Fuma.php');
require_once('./Masa.php');
require_once('./Kan.php');

// 楓麻インスタンスを作成
$fuma = new Fuma('fuma', 21, 1.75, 100);

// 各メソッドを実行
$fuma->greeting();
$fuma->selfIntroduction();
$fuma->calcBmi();


// 政インスタンスを作成
$masa = new Masa('masa', 22, 1.7, 50);

// 各メソッドを実行
$masa->greeting();
$masa->selfIntroduction();
$masa->calcBmi();


// 完さんインスタンスを作成
$kan = new Kan();

//各メソッドを実行
$kan->setHuman($fuma);
$kan->setHuman($masa);
$kan->letCry(0);
$kan->letCry(1);
