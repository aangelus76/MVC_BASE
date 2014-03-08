<?php

class Statistique extends Models{

    public function index(){
        $this->views->Msg = '<br>Dynamic title!!!';
        $this->views->renderView();
    }
	
	public function ViewStat(){
		return "90%";
	}
	public function GetData(){
		$Data = "Test de Data";
		return $Data;
	}

}
