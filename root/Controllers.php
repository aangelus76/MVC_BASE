<?php

class Controllers {

    public $route;
    protected $views;
	private  $_Model;

    public function __construct($route){
        $this->route = $route;
        $this->views = new Views($route);
        $this->views->MsgError = "";
    }
    
    public function Erreur(){
        $this->views->Msg = "Erreur de fonctionement!";
        $this->views->renderView();
    }
	
	public function chargeModel($modelName){
		require_once "Models.php";
		$checkApps = new FindError();
		$this->_Model   = $checkApps->GetExistModel($modelName);
		return $this->_Model;
	}
    
}
