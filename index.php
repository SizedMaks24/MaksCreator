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
$button3->addClass('massive yellow') ;
$button3->link('http://store.steampowered.com') ;
$button3->icon = 'game' ;

$button4 = $app ->add ('Button') ;
$button4->set ('1a') ;
$button->addClass ('huge green') ;
$button4->link('https://www.1a.lv/')
$button4->icon = 'store'
