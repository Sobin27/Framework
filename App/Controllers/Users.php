<?php

use App\Helpers\Check;

class Users extends Controller
{
    public function cadastrar()
    {
        $forms = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($forms))
        {
            $dados = [
                'nome' => trim($forms['nome']),
                'email' => trim($forms['email']),
                'senha' => trim(password_hash($forms['senha'], PASSWORD_DEFAULT)),
                'celular' => trim($forms['numero']),
            ];
            if(in_array("", $forms))
            {
                if(empty($dados['nome']))
                {
                    $dados['nome_error'] = 'Preencha o campo nome.';
                }
                if(empty($dados['email']))
                {
                    $dados['email_error'] = 'Preencha o campo email.';
                }
                if(empty($dados['senha']))
                {
                    $dados['senha_error'] = 'Preencha o campo senha.';
                }
                if(empty($dados['celular']))
                {
                    $dados['celular_error'] = 'Preencha o campo telefone.';
                }
            }else{
                if(Check::CheckNome($forms['nome']))
                {
                    $dados['nome_error'] = 'Preencha o campo nome.';
                }
                elseif(Check::CheckEmail($forms['email']))
                {
                    $dados['email_error'] = 'Preencha o campo email.';
                }else{

                }
            }

        }else{
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'celular' => '',
            ];
        }

        $this->view('Users/cadastrar', $dados);
    }
    public function login()
    {
        $this->view('Users/login');
    }
}