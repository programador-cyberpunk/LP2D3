<?php
class Pessoa{
private $nome;
private $idade;
private $profissao;


function __construct($nome,$idade,$profissao){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->profissao = $profissao;
}

function get_nome(){
   return $this->nome;
  
}

function get_idade(){
    return $this->idade;
   
 }

 function get_profissao(){
    return $this->profissao;
   
 }

function apresentar(){
   echo "Olá, meu nome é ". $this->get_nome(). " tenho ". $this->get_idade()." anos e sou " .$this->get_profissao();
}


}
?>