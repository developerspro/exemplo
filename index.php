<?php 
require_once "Pessoa.php";
require_once "Cliente.php";
require_once "ClienteVip.php";

function p($variavel){
    echo "Resultado:".$variavel."<br>";
}

$cl = new Cliente();
$clv = new ClienteVip();

$cl->setNome("Nome do cliente");
p($cl->getNome());

$clv->setNome("Nome do Cliente Vip");
p($clv->getNome());


