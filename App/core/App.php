<?php 

class App 
{
    protected $controller = "HomeController";
    // protected $action = "index";
    protected $param = [];
    
    public function __construct() 
    {
    
    echo $_SERVER['QUERY_STRING'];

        
    }
}

