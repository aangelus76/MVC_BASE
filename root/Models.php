<?php
/*TODO : ajouter un gestionaire d'erreur au connection BDD*/
class Models {
   
   
   protected $_mysql;
   private $DBInfo = array();
   
   public function __construct(){
    require_once "config/db.ini.php";
	$this->DBInfo = $ArrayDB;
   }
   
    public function connexion(){
        try{
           $this->_mysql = new PDO('mysql:host='.$this->DBInfo["DBHost"].';dbname='.$this->DBInfo["DBName"], $this->DBInfo["DBUser"], $this->DBInfo["DBPass"], array(
    PDO::ATTR_PERSISTENT => true));
	$this->_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
         }
         catch(Exception $e){
            echo 'Une erreur est survenue !';
            die();
         }
		
		 
	}
	
	public function fetchOne($table,$id){
		
		$sql = 'select * from '.$table.' where id = ?';
		$statement = $this->_mysql->prepare($sql);
		$statement->execute(array($id));
	    $this->_mysql = NULL;
		return $statement->fetchAll();	
	}

	public function fetchMulti($table){
		
		$sql = 'select * from '.$table;
		$statement = $this->_mysql->prepare($sql);
		$statement->execute();
		$this->_mysql = NULL;
		return $statement->fetchAll();
	}

}
