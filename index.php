<?php
require 'vendor/autoload.php' ;
echo "Hi,my name is Max";
$app = new \atk4\ui\App('Добро Пожаловать!') ;
$app->initLayout('Centered') ;
$button = $app -> add('Button') ;
$button ->set ('Registration') ;
$button ->icon = 'plus' ;
$button->link('https://vk.com') ;
