<?php

class consulterController extends Controllers{

    public function index(){

        $this->views->Msg = '<br>Affichage de la liste de consultation!';
        $this->views->url = $this->route;
        $this->views->renderView();
    }

    public function tous(){

        $this->views->Msg = '<br>Consultation de toute la liste';
        $this->views->renderView();
    }

    public function de(){

        $this->views->Msg = '<br>Consultation ' . $this->route['params'][0];
        $this->views->renderView();
    }

    public function Erreur($Msg){

       // $this->views->Msg = '<br>L\'action demander n\'existe pas!';
        $this->views->Msg = $Msg;
        $this->views->renderView();
    }

}
