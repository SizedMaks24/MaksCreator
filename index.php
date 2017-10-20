<?php
require 'vendor/autoload.php' ;

$app = new \atk4\ui\App('Welocme to Fun Page') ;
$app->initLayout('Centered') ;

$button1 = $app ->add ('Button') ;
$button1->set('Atleticon Madrid') ;
$button1->addClass('massive red') ;
$button1->link('http://en.atleticodemadrid.com/') ;
$button1->icon = 'plus' ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan') ;

 $a = -4 ;

if ($a > 0) {
  $name = 'Верно!' ;
}else{
  $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;
