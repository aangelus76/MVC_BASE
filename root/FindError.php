<?php
/**
* Gestionaire d'erreur de l'application
* @version 1.0
* @todo Gestionaire autonaume.
*/
class FindError{
   private $_route;
   protected $_action = "index";
   protected $_page   = "index";
   protected $_controller = "errorController";
   
   public function __construct($route){
        $this->_route = $route;
        print_r($this->_route);
        //$this->GetExistClass("sdjkld");
    }
   
/**
* Controle si une class existe, dans le cas ou elle n'existe pas, ont en défini un par default
* @param string $className =  Nom de la class a controller
* @return string $class = Le nom de la class qui seras charger au final
*/
   public function GetExistClass($className){
       $ValidClass = class_exists($className) ? array("Statu" => "Sucess",
                                                   "ClassName" => $className,
                                                   "MsgError" => "")
                                           : array("Statu" => "Error",
                                                   "ClassName"=>$this->_controller,
                                                   "MsgError" => "La class $className n'existe pas.");  
       return $ValidClass;
   } 

/**
* Controle si une vue " page " existe, dans le cas ou elle n'existe pas, ont en défini une par default
* @param string $page =  Nom de la vue " page " a controller
* @return string $page = Le nom de la vue " page " qui seras charger au final
*/
   public function GetExistView($Controller,$pageName){
    $DirPath = Apps_Pages . $Controller . "/";
    $ValidPage = file_exists($DirPath . $pageName.".phtml") ? "La page $pageName existe" : "La page $pageName existe pas";
    return $ValidPage;
    }
/**
* Controle si une action existe, dans le cas ou elle n'existe pas, ont en défini un par default
* @param string $action =  Nom de l'action a controller
* @return string $action = Le nom de l'a class'action qui seras charger au final
*/
   public function GetExistAction(){
       $ValidAction = in_array($this->_route["action"], get_class_methods($this->_route["controller"]."Controller")) ? "Action ".$this->_route["action"]." existe" : "Action ".$this->_route["action"]." existe pas";
        return $ValidAction;
   }
/**
* Controle si un model existe, dans le cas ou il n'existe pas, ont en défini un par default
* @param string $model =  Nom du model a controller
* @return string $model = Le nom du model qui seras charger au final
*/
   public function GetExistModel(){
       
   }
}
