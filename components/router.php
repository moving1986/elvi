<?php 
class Router {

    private $routers;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath); 

    }

    public function run() 
    {
        // if(!empty($_SERVER['REQUEST_URL']))
        print_r($this->routes);
        echo "Работает эта шляпа";
    }




}