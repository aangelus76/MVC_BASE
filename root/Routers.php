<?php

class Routers {
	
   public static function analyze( $query ) {

	   $ResultPart = explode("/",$query);
	   $result = array(
         "controller" => isset($ResultPart[0]) ? rtrim($ResultPart[0],"/") : "error",
		 "page" => !empty($ResultPart[1]) ? $ResultPart[1] : "index",
         "action" => !empty($ResultPart[2]) ? $ResultPart[2] : "index",
         "params" => !empty($ResultPart[3]) ? $ResultPart[3] : "All"
      );
      
      return $result;

   }
}
