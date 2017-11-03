<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Welocme to Fun Page') ;
$app->initLayout('Centered') ;

/*$button1 = $app ->add ('Button') ;
$button1->set('Atleticon Madrid') ;
$button1->addClass('massive red') ;
$button1->link('http://en.atleticodemadrid.com/') ;
$button1->icon = 'plus' ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan') ;

 $a = 0 ;

if ($a != 0) {
  $name = 'Верно!' ;
}else{
  $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$label = $app->add(['Label','Last Games']) ;

$img2 = 'https://www.apuestas-deportivas.com/wp-content/uploads/2017/10/Qarabag-v-Atlético-Madrid.jpg';
$icon2 = $app ->add(['Image', $img2 ]) ;

$a = 0 ;

if ($a == 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 4 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = -3 ;

if ($a > -8) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 8 ;

if ($a >= 9) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 12 ;

if ($a <= 10) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 0 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 'test' ;

if ($a == 'test') {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;*/
$button = $app->layout->add(['Button','LINK TO FILE']) ;
$button->link(['Test','Name'=>'Max']) ;
