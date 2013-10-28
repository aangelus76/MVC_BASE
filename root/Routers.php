<?php

class Routers {
	
   public function urlParse( $query ) {

	   $ResultPart = explode("/", rtrim($query,"/"));

	   $result = array(
         "controller" => isset($ResultPart[0]) ? rtrim($ResultPart[0],"/") : "index",
		 "page" => !empty($ResultPart[1]) ? $ResultPart[1] : "index",
         "action" => !empty($ResultPart[2]) ? $ResultPart[2] : "index",
         "params" => !empty($ResultPart[3]) || count($ResultPart) >= 4 ? $this->SetParams($ResultPart) : "empty"
      );
	 // print_r($result);
      return $result;
   } 
   
   public function SetParams($Params){
	   $ArrayReturn = array();
	   for( $i = 3; $i < count($Params); $i++){
		   array_push($ArrayReturn,$Params[$i]);
	   }
	   return $ArrayReturn;
   }
}
