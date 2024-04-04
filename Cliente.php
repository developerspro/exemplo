<?php 
 require_once "Cliente.php";
class Cliente extends Pessoa { 

    public $pontos;
    public $dependente;

    public function __construct()
    {
        echo "Executando o construtor<br>";
        $this->dependente = new Pessoa();
        $this->dependente->setNome("teste");
    }
    
    public function somaPontos($pontos){
        // recuperar os pontos do banco de dados
        // somar $pontos
        // atualizar o banco de dados
        $this->validaPontos();
        $this->pontos= $this->pontos +$pontos;
        }

    public function validaPontos(){
        // verifica a validade dos pontos
    }
    public function getPontos (){
        $this->validaPontos();
         echo $this->pontos;
    }
    
}