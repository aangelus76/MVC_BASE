<?php

class Controllers {
/**
 * Mettre en place un gestionaire d'erreur si un controlleur n'existe pas!
 * Mettre en place une gestion d'erreur si une action n'existe pas!
 */
    public $route;
    protected $views;

    public function __construct($route){
        //$this->route = $route;
        $this->views = new Views($route);
        $this->views->MsgError = "";
        $this->AppsStart($route);
    }
    
    public function Erreur(){
        $this->views->Msg = "Erreur de fonctionement!";
        $this->views->renderView();
    }
    
    public function AppsStart($route){
        //echo "<pre>";
        //print_r($route);
        //print_r(parent::GetExistClass($route["controller"]."Controller"));
        //print_r(parent::GetExistAction($route["controller"]."Controller",$route["action"]));
       //$this->views->MsgError = parent::GetExistAction($route["controller"]."Controller",$route["action"]);
        //print_r(parent::GetExistView($route["controller"],$route["page"]));
        
        //echo "</pre>";
    }

}
