<?php

class Controller
{
    public function model($model)
    {
        require_once '../App/Models' . $model . '.php';
        return new $model;
    }

    public function view($view, $dados = [])
    {
        $files = ('../App/Views/' . $view . '.php');

        if(file_exists($files))
        {
            require_once $files;
        }
        else
        {
            die('Arquivo não encontrado');
        }
    }
}