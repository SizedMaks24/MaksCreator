<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Game') ;
$app->initLayout('Centered') ;
$min=$_GET ['min'] ;
$max=$_GET ['max'] ;
$mid=round( ($min+$max)/2 );
$button1 = $app->layout->add(['Мое число больше']) ;
$button1->link(['Test','min'=$mid,'max'=$max]) ;
$button2 = $app->layout->add(['Мое число меньше']) ;
$button1->link(['Test',]) ;
$button3 = $app->layout->add(['Оно верно!']) ;
