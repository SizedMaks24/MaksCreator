<?php
require 'vendor/autoload.php' ;
require 'Adidas.php' ;


$app = new \atk4\ui\App('Adidas : BE BETTER , DO BETTER') ;
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

$label = $app->add(['Label',$name]) ;

$text=app->add(['Text','Push Delete Your Brains']) ;
$button=$app->layout->add(['Button','Delete Your Brains']) ;
$button->link(['Test',]) ;
$button->addClass(['Big ornge']) ;*/

/*$cat1 = new Cat ;
$cat1->name='Dzujsa';
$cat1->sex='Girl';
$cat1->colour='Green';
$cat1->age='8';

$cat2 = new Cat ;
$cat2->name='Fashist';
$cat2->sex='Boy';
$cat2->colour='Pink';
$cat2->age='16';

$cat3 = new Cat ;
$cat3->name='King Arthur';
$cat3->sex='Boy';
$cat3->colour='Black';
$cat3->age='12';

$cat4 = new Cat ;
$cat4->name='Stalin';
$cat4->sex='Boy';
$cat4->colour='White';
$cat4->age='119';
$cat4->AgeCheck() ;
$label=$app->add(['Label',$cat4->name.'  '.$answer */

$Adidas1 = new Boots ;
$Adidas1->name = 'Ace 17 + PureControl' ;
$Adidas1->color = 'red' ;
$Adidas1->price = '$450' ;
$label1 = $app->add(['Label',$Adidas1->name,$Adidas1->color,'detail'=>Adidas1]);

$Adidas2 = new Boots ;
$Adidas2->name = 'Ace 16.3 Primesh' ;
$Adidas2->color = 'white' ;
$Adidas2->price = '$80' ;
$label2 = $app->add(['Label',$Adidas2->name,$Adidas2->color,'detail'=>Adidas2]);

$Adidas3 = new Boots ;
$Adidas3->name = 'X PureChaous' ;
$Adidas3->color = 'green' ;
$Adidas3->price = '$250' ;
$label3 = $app->add(['Label',$Adidas3->name,$Adidas3->color,'detail'=>Adidas3]);

$Adidas4 = new Boots ;
$Adidas4->name = 'Primeknit' ;
$Adidas4->color = 'blue' ;
$Adidas4->price = '$125' ;
$label4 = $app->add(['Label',$Adidas4->name,$Adidas4->color,'detail'=>Adidas4]);
