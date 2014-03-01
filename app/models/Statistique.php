<?php

class Statistique extends Models{

    public function index(){
        $this->views->Msg = '<br>Dynamic title!!!';
        $this->views->renderView();
    }
	
	public function ViewStat(){
		echo "90%";
	}

}
