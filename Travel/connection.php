<?php
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','') ;

Class Places extends \atk4\data\Model {
  public $table ='places' ;
  function init () {
parent::init() ;
  $this->addField('name') ;
}
}
Class Clients extends \atk4\data\Model {
  public $table ='clients' ;
  function init () {
parent::init() ;
    $this->addField('name') ;
  $this->addField('surname') ;
  $this->addField('email') ;
  $this->addField('department_date');
  $this->addField('arival_date') ; 

  
}
}