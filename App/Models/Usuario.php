<?php

namespace App\Models;

 use App\Libraries\Database;

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function store($dados)
    {
        $this->db->query("INSERT INTO cadastro(nome,email,celular,senha) VALUES(:nomes,:email,:celular,:senha)");
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("celular", $dados['celular']);
        $this->db->bind("senha", $dados['senha']);
        $this->db->execute();
    }
}