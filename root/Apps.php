<?php

class Apps{

    private  $DefaultAction = "index";

    public  function autoloadRoot($className){
        set_include_path(ROOT . "/root/");
        spl_autoload($className);
    }

    public  function autoloadApp($className){
        set_include_path(ROOT . "/app/controllers/");
        spl_autoload($className);
    }

    public  function run(){
        // Autoload
        spl_autoload_register(array("Apps", "autoloadApp"));
        spl_autoload_register(array("Apps", "autoloadRoot"));
        // Analyser la requete
        $Routers = new Routers();
        $route = $Routers->urlParse();
        
        $checkApps = new FindError($route);
        //print_r($checkApps->GetExistAction());
        // Annalyse d'erreur
        //$FindError = new FindError($route);
        
        //Traitement pour chargement
/*  Modifier tous ce qui est en dessous pour integrer FindError() */
        $class = str_replace("/", "", $route["controller"]) . "Controller";
//print_r($FindError->GetExistClass($class));
        
        if($this->GetValidClass($class)){
            $controller = new $class($route);
            $this->GetValidActions($controller, $route["action"]);
        }
        else{
            call_user_func(array($controler = new errorController($route), $this->DefaultAction));
        }
    }

    public  function GetValidClass($class){
        $ValidClass = class_exists($class) ? true : false;
        return $ValidClass;
    }

    public  function GetValidActions($Controller, $Actions){
        $ValidAction = in_array($Actions, get_class_methods($Controller)) ? true : false;
//        Apps::$DefaultAction = in_array($Actions, get_class_methods($Controller)) ? $Controller->$Actions : $Controller->Erreur('Action inexistante');
       $this->DefaultAction = in_array($Actions, get_class_methods($Controller)) ? $Actions : "Erreur";
        call_user_func(array($Controller, $this->DefaultAction));
        return $ValidAction;
    }

}
