<?php

class Apps {
  
  public static function autoloadRoot($className) {
    set_include_path(ROOT."/root/");
    spl_autoload($className);
  }
  
  public static function autoloadApp($className) {
    set_include_path(ROOT."/app/controllers/");
    spl_autoload($className);
  }
  
  public static function run() {
      // Autoload
      spl_autoload_register(array("Apps", "autoloadApp"));
	  spl_autoload_register(array("Apps", "autoloadRoot"));
	  // Analyser la requete
      $query = (isset($_GET["query"]) && !empty($_GET["query"])) ? $_GET["query"] : "index";
	  
	  $Routers = new Routers();
      $route  = $Routers->urlParse($query);

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
			 call_user_func(array($controller , "index"));
			 //print_r(get_class_methods($controller));
		}
	    }
        else{
			 call_user_func(array($controler = new errorController($route), "index"));
		}
	  }  
   }
   
}
