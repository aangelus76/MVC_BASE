<?php
class parametrerController extends Controllers{
	
	
    
    function gomme(){
         $this->views->renderView();
    }
    
    public function index(){
		$CheckModel = $this->chargeModel('Statistique');
        $this->views->Msg = $this->UseModel->GetData();
        $this->views->renderView();
    }
    
    
}
