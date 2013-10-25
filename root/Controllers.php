<?php

class Controllers {
   protected $route;
   protected $views;

   public function __construct($route) {
      $this->route = $route;
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

}
