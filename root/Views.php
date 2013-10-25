<?php

class Views {
   private $_route;
   protected $_content = "";
   protected $_layout = 'layout';
   
   
   public function __construct( $route ) {
      $this->_route = $route;
   }
   
   
   public  function renderView() {
	  if($this->_route["controller"] == "index"){
		  $viewFile = ROOT . "/app/views/pages/" . $this->_route["controller"] . "/index.phtml";
	  }
	  else{
		  $viewFile = ROOT . "/app/views/pages/" . $this->_route["controller"] . "/" . $this->_route["page"] . ".phtml";
	  }
	  
	   $errorFile = ROOT . "/app/views/pages/erreur/index.phtml";

      if( file_exists( $viewFile ) ){
		  $openFile = $viewFile;
	  }
      else{
		  $openFile = $errorFile;
	  }
     
	    ob_start();
		 include($openFile);
		$this->_content = ob_get_clean();
        include(ROOT . "/app/views/pages/".$this->_layout.".phtml");
   }
   
   public function content(){
		return $this->_content;
	}
}

