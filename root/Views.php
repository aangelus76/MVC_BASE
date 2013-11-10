<?php

class Views{
    /**
     *Mettre en place une gestion d'erreur si une vue n'existe pas!
     */
    private $_route;
    protected $_content = "";
    protected $_layout = 'layout';

    public function __construct($route){
        $this->_route = $route;
    }

    public function renderView(){
        ob_start();
        include($this->ReturnView());
        //include($this->GetExistView());
        $this->_content = ob_get_clean();
        include(Apps_Pages . $this->_layout . ".phtml");
    }

    public function content(){
        return $this->_content;
    }

    public function ReturnView(){
        $DirPath = Apps_Pages . $this->_route["controller"] . "/";
        $Controller = $this->_route["controller"];
        $Page = $this->_route["page"] . '.phtml';
        $ValidDir = is_dir($DirPath) ? $DirPath : Apps_Pages . "error/";
        $ValidPage = file_exists($ValidDir . $Page) ? $ValidDir . $Page : Apps_Pages . "error/index.phtml";
        $ValidAll = file_exists($ValidPage) ? $ValidPage : Apps_Pages . "error/index.phtml";
        return $ValidAll;
       
    }

}
