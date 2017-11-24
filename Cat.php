<?php
Class Cat {
  public $name ;
  public $sex ;
  public $age ;
  public $colour = 'Brown';
  public function AgeCheck() {
    if($this->age<12){
      return $answer = 'Годен';
    } else {
      return $answer = 'Негоден';
    }
  }
}
