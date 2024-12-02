<?php

Class ClassCad {

    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    


    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getNome()
    {
        return $this->nome; 
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

       }

