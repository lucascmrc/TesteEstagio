<?php
/*Classe usuário*/
class Usuario
{

    private $nome;
    private $cpf;
    private $prof;
    private $email;

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;

    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getProf()
    {
        return $this->prof;
    }

    function setProf($prof)
    {
        $this->prof = $prof;
    }


    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
}

?>