<?php

class Apps{

    private static $DefaultAction = "index";

    public static function autoloadRoot($className){
        set_include_path(ROOT . "/root/");
        spl_autoload($className);
    }

    public static function autoloadApp($className){
        set_include_path(ROOT . "/app/controllers/");
        spl_autoload($className);
    }

    public static function run(){
        // Autoload
        spl_autoload_register(array("Apps", "autoloadApp"));
        spl_autoload_register(array("Apps", "autoloadRoot"));
        // Analyser la requete
        $Routers = new Routers();
        $route = $Routers->urlParse();
        //Traitement pour chargement
        $class = str_replace("/", "", $route["controller"]) . "Controller";

        if(Apps::GetValidClass($class)){
            $controller = new $class($route);
            Apps::GetValidActions($controller, $route["action"]);
        }
        else{
            call_user_func(array($controler = new errorController($route), Apps::$DefaultAction));
        }
    }

    public static function GetValidClass($class){
        $ValidClass = class_exists($class) ? true : false;
        return $ValidClass;
    }

    public static function GetValidActions($Controller, $Actions){
        $ValidAction = in_array($Actions, get_class_methods($Controller)) ? true : false;
        Apps::$DefaultAction = in_array($Actions, get_class_methods($Controller)) ? $Controller->$Actions : $Controller->Erreur('Action inexistante');
        //call_user_func(array($Controller, Apps::$DefaultAction));
        return $ValidAction;
    }

}
