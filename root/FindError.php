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
   
   public function __construct($route = NULL){
        $this->_route = $route;
    }
   
/**
* Controle si une class existe, dans le cas ou elle n'existe pas, ont en défini un par default
* @param string $className =  Nom de la class a controller
* @return string $class = Le nom de la class qui seras charger au final
*/
   public function GetExistClass(){
       $ValidClass = class_exists($this->_route["controller"]."Controller") 
                                           ? array("Statu" => "Sucess",
                                                   "Name" => $this->_route["controller"]."Controller",
                                                   "MsgError" => "")
                                           : array("Statu" => "Error",
                                                   "Name"=>$this->_controller,
                                                   "MsgError" => "La catégorie <span class=\"text-error\">".$this->_route["controller"]."</span> n'existe pas.");  
       
	   return $ValidClass; // Retourne une class Valide
   } 

/**
* Controle si une vue " page " existe, dans le cas ou elle n'existe pas, ont en défini une par default
* @param string $page =  Nom de la vue " page " a controller
* @return string $page = Le nom de la vue " page " qui seras charger au final
*/
   public function GetExistView(){
    $DirPath = Apps_Pages . $this->_route["controller"] . "/";
    $ValidPage = file_exists($DirPath . $this->_route["page"].".phtml") 
                                                 ? array("Statu" => "Sucess",
                                                   "Name" => $this->_route["page"],
                                                   "MsgError" => "") 
                                                 : array("Statu" => "Error",
                                                   "Name"=>$this->_page,
                                                   "MsgError" => "La page <span class=\"text-error\">".$this->_route["page"]."</span> existe pas");
    
	return $ValidPage; // Retourne une page Valide
    }
/**
* Controle si une action existe, dans le cas ou elle n'existe pas, ont en défini un par default
* @param string $action =  Nom de l'action a controller
* @return string $action = Le nom de l'a class'action qui seras charger au final
*/
##########   Fixé le bug au niveau de '@'
   public function GetExistAction(){
       $ValidAction = @in_array($this->_route["action"], get_class_methods($this->_route["controller"]."Controller")) 
                                                                                   ? array("Statu" => "Sucess",
                                                                                           "Name" => $this->_route["action"],
                                                                                           "MsgError" => "") 
                                                                                   : array("Statu" => "Error",
                                                                                           "Name"=>$this->_page,
                                                                                           "MsgError" => "L'action <span class=\"text-error\">".$this->_route["action"]."</span> existe pas");
        
		return $ValidAction; // Retourne une action Valide
   }
/**
* Controle si un model existe, dans le cas ou il n'existe pas, ont en défini un par default
* @param string $model =  Nom du model a controller
* @return string $model = Le nom du model qui seras charger au final
*/
   public function GetExistModel($Model){
	   $ValidModel = file_exists(Apps_Model.$Model.".php") 
                                                 ? array("Statu" => "Sucess",
                                                   "Name" => $Model,
                                                   "MsgError" => "") 
                                                 : array("Statu" => "Error",
                                                   "Name"=>"erreur de model",
                                                   "MsgError" => "Le model <span class=\"text-error\">".$Model."</span> n'existe pas");
    
	return $ValidModel; // Retourne une page Valide
       //echo "test si model exist";
   } // Verifie si le Model existe
   
   public function GetExistParam(){
         return $this->_route["params"];
   } // Verifie si des parametre existe dans l'url
}
