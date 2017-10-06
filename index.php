<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Добро Пожаловать!') ;
$app->initLayout('Centered') ;

$button = $app -> add('Button') ;
$button ->set ('Registration') ;
$button ->icon = 'plus' ;
$button->link('https://vk.com') ;

$button = $app -> add('Button') ;
$button ->set ('Apple') ;
$button ->icon = 'laptop' ;
$button->link('https://www.apple.com') ;

$button = $app -> add('Button') ;
$button ->set ('Steam ') ;
$button ->icon = 'laptop' ;
$button->link('http://store.steampowered.com') ;

$button1 = $app ->add ('Button') ;
$button1->set('Registartation') ;
$button1->addClass('massive green') ;
$button->link('https://vk.com') ;

$button2 = $app ->add ('Button') ;
$button2->set('Apple') ;
$button2->addClass('massive yellow') ;
$button->link('https://www.apple.com') ;

$button3 = $app ->add ('Button') ;
$button3->set('Steam') ;
$button3->addClass('huge red') ;
$button->link('http://store.steampowered.com') ;
