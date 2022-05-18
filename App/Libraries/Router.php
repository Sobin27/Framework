<?php

class Router
{
    private $controller = 'Pages';
    private $method = 'index';
    private $params = [];
    
    public function __construct()
    {
        $url = $this->url() ? $this->url() : [1];
        if(file_exists('../App/Controllers/'. ucwords($url[1]) .'.php'))
        {
            $this->controller = ucwords($url[1]);
            unset($url[1]);
        }
        
        require_once '../App/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        
        if(isset($url[2]))
        {
            if(method_exists($this->controller, $url[2]))
            {
                $this->method = $url[2];
                unset($url[2]);
            }
        }
        
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
        
         //var_dump($this->url());
    }

    private function url()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if(isset($url)):
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            
            return $url;
        endif;
    }

}