<?php

class Apps {
	
   public static function autoload($class) {
      if(file_exists(ROOT."/root/$class.php")){
         require_once(ROOT."/root/$class.php");
	  }
      else if(file_exists(ROOT."/app/controllers/".$class.".php")){
         require_once(ROOT."/app/controllers/".$class.".php");
	  }
   }


   public static function run() {
      // Autoload
      spl_autoload_register(array("Apps", "autoload"));
      // Analyser la requete
      $query = isset($_GET["query"]) ? $_GET["query"] : "index";
      $route = Routers::analyze( $query );
      $class = str_replace("/","",$route["controller"])."Controller";
      //Traitement pour chargement
      if($class) {
		if(class_exists($class)){
         $controller = new $class ($route);
         $method = array($controller, $route["action"]);
		 
		  if(in_array($route["action"],get_class_methods($controller))){
            call_user_func($method);
	      }
		  else{
			 call_user_func(array($controler = new errorController($route), "ActionError"));
		}
	    }
        else{
			 call_user_func(array($controler = new errorController($route), "index"));
		}
	  }  
   }
   
}
