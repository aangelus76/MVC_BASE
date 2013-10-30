<?php

class errorController extends Controllers{

    public function index(){

        $this->views->Msg = '<br>Erreur interne!';
        //$this->views->display(); 
        $this->views->renderView();
    }

    public function ActionError(){

        $this->views->Msg = '<br>Action inconnue!';
        //$this->views->display(); 
        $this->views->renderView();
    }

}
