<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Добро Пожаловать!') ;
$app->initLayout('Centered') ;



$button1 = $app ->add ('Button') ;
$button1->set('Registartation') ;
$button1->addClass('massive green') ;
$button1->link('https://vk.com') ;
$button1->icon = 'plus' ;

$button2 = $app ->add ('Button') ;
$button2->set('Apple') ;
$button2->addClass('massive yellow') ;
$button2->link('https://www.apple.com') ;
$button2->icon = 'laptop' ;

$button3 = $app ->add ('Button') ;
$button3->set('Steam') ;
$button3->addClass('huge red') ;
$button3->link('http://store.steampowered.com') ;
$button3->icon = 'game' ;

$button4 =$app->add(['button','Google','iconRight'=>'browser']) ;

$bar =$app ->add(['ui'=>'vertical buttons']) ;
$bar ->add(['button','Play','icon'=>'play']) ;
$bar ->add(['button','Stop','icon'=>'stop']) ;
$bar ->add(['button','Download','icon'=>'download']) ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan'); 
