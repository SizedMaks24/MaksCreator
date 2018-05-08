<?php
require 'vendor/autoload.php' ;


$app = new \atk4\ui\App('Secret Travel base') ;
$app->initLayout('Admin') ;

$form = $app->layout->add('Form') ;
$form ->setModel(new Clients($db));
