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

 $a = 0 ;

if ($a != 0) {
  $name = 'Верно!' ;
}else{
  $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$label = $app->add(['Label','Last Games']) ;

$img2 = 'https://www.bing.com/images/search?view=detailV2&ccid=qcKU9Unl&id=98FEC4CF88A4D5CF229873DF83A04E70D73FAC41&thid=OIF.YaA8CcY%2bjhez%2bNw3jO46vQ&q=fk+quarabag+vs+atletico&simid=73904513652&selectedIndex=8&ajaxhist=0';
$icon2 = $app ->add(['Image', $img2 ]) ;
