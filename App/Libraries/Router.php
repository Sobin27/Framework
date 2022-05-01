<?php

class Router
{
    private $controller = 'Pages';
    private $method = 'index';
    private $params = [];


    public function __construct()
    {
        $url = $this->url() ? $this->url() : [0];

        if(file_exists('../App/Controllers/'. ucwords($url[0]) .'.php'))
        {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../App/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        /*
        if(isset($url[1]))
        {
            if(method_exists($this->controlador, $url[1]))
            {
                $this->method = $url[1];
                unset($url[0]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
        */
    }

    private function url()
    {
       $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
       
       if(isset($url)):
            
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);

            return $url;
       endif;
    }
}