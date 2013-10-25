<?php

class Controllers {
   protected $route;
   protected $views;

   public function __construct($route) {
      $this->route = $route;
	// $this->ViewDebug('$route. dans Controllers.php',$route);
      $this->views = new Views($route);
   }
   
   public function GetParams($DataParam = array()){
	   if(isset($DataParam['params']) && !empty($DataParam['params']) && $DataParam['params'] != "All" ){
		   return $DataParam['params'];
	   }
	   else{
		  return "*";
	   }
   }
   
   public function ViewDebug($ItemDebug = "",$data = null){
	   echo "<pre>"; 
	   echo "<hr>";
	   echo "Debug -> ".$ItemDebug.'<br />';
	   echo "###############################<br />";
	   print_r($data);
	   echo "<hr>";
	   echo "</pre>";
   }

}
