<?php
class Pessoa { 

private $nome;
public $email;
public $telefone; 


public function setNome($nome){
    $this->nome = $nome;
}

public function getNome(){

    return $this->nome;

}
}