<?php
class parametrerController extends Controllers{
    
    function gomme(){
         $this->views->renderView();
    }
    
    public function index(){
         $this->views->Msg = "";
        $this->views->renderView();
    }
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

