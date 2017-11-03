<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Welocme to Fun Page') ;
$app->initLayout('Centered') ;
$c = $_GET['Name'] ;
$h = $_GET ['Surname'] ;
$label = $app->add(['Label',$c.' '.$h]) ;
