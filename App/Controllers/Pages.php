<?php

class Pages extends Controller
{
    public function __construct()
    {

        $dados = [
            'titulo' => 'Página Inicial'
        ];

        $this->view('Pages/home', $dados);
    }
}