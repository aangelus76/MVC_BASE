<?php

class Controllers {
/**
 * Mettre en place un gestionaire d'erreur si un controlleur n'existe pas!
 * Mettre en place une gestion d'erreur si une action n'existe pas!
 */
    public $route;
    protected $views;

    public function __construct($route){
        $this->route = $route;
        $this->views = new Views($route);
        $this->views->MsgError = "";
    }
    
    public function Erreur(){
        $this->views->Msg = "Erreur de fonctionement!";
        $this->views->renderView();
    }
    
}
