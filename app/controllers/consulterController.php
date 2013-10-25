<?php
        class consulterController extends Controllers {
				
				public function index(){

                                $this->views->Msg = '<br>Affichage de la liste de consultation!';
								$this->views->url = $this->route;							    
								 $this->views->renderView();  
								 $this->GetUrlData();
								 print_r($this->route);
								 echo Controllers::GetParams($this->route);
                }
				
				public function tous(){

                                $this->views->Msg = '<br>Consultation de toute la liste';
								//$this->views->display(); 
								$this->views->renderView();  
								$this->GetUrlData();
								echo Controllers::GetParams($this->route);
                }
				
				public function de(){

                                $this->views->Msg = '<br>Consultation '.Controllers::GetParams($this->route);
								//$this->views->display();
								$this->views->renderView();  
								 $this->GetUrlData();  
								 echo Controllers::GetParams($this->route);
                }
				
				public function Erreur(){

                                $this->views->Msg = '<br>Erreur de traitement!';
								//$this->views->display(); 
								$this->views->renderView();  
								 $this->GetUrlData();
                }
				
				public function GetUrlData(){
				    echo "<pre>";
				    print_r($this->route);
					echo "</pre>";
				}

        }