<?php

class Apps{
    
    private  $_Class;
    private  $_View;
    private  $_Action;
    private  $_Params;
    
    private $LoadClass  = "errorController";
    private $LoadView   = "index";
    private $LoadAction = "index";
    
    public  function autoloadRoot($className){
        set_include_path(ROOT . "/root/");
        spl_autoload($className);
    }

    public  function autoloadApp($className){
        set_include_path(ROOT . "/app/controllers/");
        spl_autoload($className);
    }

    public  function run(){
        // Autoload
        spl_autoload_register(array("Apps", "autoloadApp"));
        spl_autoload_register(array("Apps", "autoloadRoot"));
        // Analyser la requete
        $Routers = new Routers();
        $route = $Routers->urlParse();
        
        $checkApps = new FindError($route);
        $this->_Class   = $checkApps->GetExistClass();
        $this->_View   = $checkApps->GetExistView();
        $this->_Action  = $checkApps->GetExistAction();
        $this->_Params = $checkApps->GetExistParam();

         $ErrorMsg = "";
        if($this->_Class["Statu"] === "Sucess"){
            if($this->_View["Statu"] === "Sucess"){
                if($this->_Action["Statu"] === "Sucess"){
                    $this->LoadClass   = $this->_Class["Name"];
                    $this->LoadView   = $this->_View["Name"];
                    $this->LoadAction  = $this->_Action["Name"];
                }
                else{
                $ErrorMsg = $this->_Action["MsgError"];
                }
            }
            else{
            $ErrorMsg = $this->_View["MsgError"];
            }
        }
        else{
            $ErrorMsg = $this->_Class["MsgError"];
        }
         
         define("ErrorMsgs",$ErrorMsg);
         $route["controller"] = $this->LoadClass;
         $route["page"] = $this->LoadView;
         $route["action"] = $this->LoadAction;

        $LoadApps = new $this->LoadClass($route);
        call_user_func(array($LoadApps, $this->LoadAction));
    }
}
