<?php

class Models {
   
   
   protected $_dbh = null;
   private $DBInfo = array();
   
   public function __construct(){
    require_once "config/db.ini.php";
	$this->DBInfo = $ArrayDB;
	/*print_r($this->DBInfo);*/
   }
   
    public function connexion(){
		
		return $this->DBInfo["DBName"];
	}

}
