<?php

class Statistique extends Models{

    public function index(){
        $this->views->Msg = '<br>Dynamic title!!!';
        $this->views->renderView();
    }
	
	public function ViewStat(){
		$this->connexion();
		return $this->fetchOne("enfants",4);
	}
	public function ViewStatMulti(){
		$this->connexion();
		return $this->fetchMulti("enfants");
	}
	
	public function GetData(){
		$Data = "Test de Data";
		return $Data;
	}

}
