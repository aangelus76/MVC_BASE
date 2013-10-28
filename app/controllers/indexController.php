<?php
        class indexController extends Controllers {
                
                
                public function index(){

                                $this->views->Msg = '<br>Dynamic title!!!';   
								$this->views->renderView();   
                }

        }