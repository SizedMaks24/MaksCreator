<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Добро Пожаловать!') ;
$app->initLayout('Centered') ;

$button1 = $app ->add ('Button') ;
$button1->set('Registartation') ;
$button1->addClass('massive red') ;
$button1->link('https://vk.com') ;
$button1->icon = 'plus' ;

$button2 = $app ->add ('Button') ;
$button2->set('Apple') ;
$button2->addClass('massive orange') ;
$button2->link('https://www.apple.com') ;
$button2->icon = 'laptop' ;

$button3 = $app ->add ('Button') ;
$button3->set('Steam') ;
$button3->addClass('huge yellow') ;
$button3->link('http://store.steampowered.com') ;
$button3->icon = 'game' ;

<<<<<<< HEAD
$button4 =$app->add(['button','Google','iconRight'=>'browser']) ;

$bar =$app ->add(['ui'=>'vertical buttons']) ;
$bar ->add(['button','Play','icon'=>'play']) ;
$bar ->add(['button','Stop','icon'=>'stop']) ;
$bar ->add(['button','Download','icon'=>'download']) ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan'); 
=======
$button4 =$app ->add ('Button') ;
$button4->set('1a') ;
$button4->addClass('huge green') ;
$button4->link ('https://www.1a.lv/') ;
$button4->icon = 'game' ;

$button5=$app ->add ('Button') ;
$button5->set('YouTube') ;
$button5->addClass('huge blue') ;
$button5->link ('https://www.youtube.com/') ;
$button5->icon ='plus' ;

$button6=$app ->add ('Button') ;
$button6->set('heroku') ;
$button6->addClass ('small dark blue') ;
$button6->link ('https://heroku.com') ;
$button6->icon = 'plus' ;

$button7=$app ->add ('Button') ;
$button7->set('Twitch') ;
$button7->addClass ('small purple') ;
$button7->link ('https://twitch.tv/') ;
$button7->icon = 'plus' ;
>>>>>>> ddd8c957ebc08d90fd3728767de7bdaff1332429
