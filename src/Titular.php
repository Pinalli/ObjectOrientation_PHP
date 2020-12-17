<?php

class Titular
{

    private CPF $cpf;
    private  $nome;

    public function __construct(CPF $cpf, string $nome)
    {
         $this->cpf = $cpf;
         $this -> validarNome($nome);
         $this->nome = $nome;
    }

    public function getCpf():CPF
    {
        return $this->cpf;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    private function validarNome(string $nome)
    {
        if(strLen($nome ) < 5) {
            echo "O nome deve ter mais de 5 caracteres";
            exit();
        }
    }

}
