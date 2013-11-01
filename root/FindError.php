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
                                                   "MsgError" => "La class n'existe pas.");  
       return $ValidClass;
   } 
/**
* Controle si un controlleur existe, dans le cas ou il n'existe pas, ont en défini un par default
* @param string $controller =  Nom du controlleur a controller
* @return string $controller = Le nom du controlleur qui seras charger au final
*/
   public function GetExistController(){
       
   }
/**
* Controle si une vue " page " existe, dans le cas ou elle n'existe pas, ont en défini une par default
* @param string $page =  Nom de la vue " page " a controller
* @return string $page = Le nom de la vue " page " qui seras charger au final
*/
   public function GetExistView(){

   }
/**
* Controle si une action existe, dans le cas ou elle n'existe pas, ont en défini un par default
* @param string $action =  Nom de l'action a controller
* @return string $action = Le nom de l'a class'action qui seras charger au final
*/
   public function GetExistAction(){
       
   }
/**
* Controle si un model existe, dans le cas ou il n'existe pas, ont en défini un par default
* @param string $model =  Nom du model a controller
* @return string $model = Le nom du model qui seras charger au final
*/
   public function GetExistModel(){
       
   }
}
