<?php

class Controllers extends FindError{
/**
 * Mettre en place un gestionaire d'erreur si un controlleur n'existe pas!
 * Mettre en place une gestion d'erreur si une action n'existe pas!
 */
    protected $route;
    protected $views;

    public function __construct($route){
        $this->route = $route;
        $this->views = new Views($route);
        //print_r(parent::GetExistClass("djfhjkdfh"));
        $this->views->MsgError = " Affichage Erreur a l'avenir.";
    }
    
    public function Erreur(){

       // $this->views->Msg = '<br>L\'action demander n\'existe pas!';
        $this->views->Msg = "Erreur de fonctionement!";
        $this->views->renderView();
    }

}
