<?php

class contaBancaria{
  private Titular;
  private Numero;
  private Saldo;
  function __construct($titular,$conta,$saldo){
     $this->titular = $Titular;
     $this->numero = $Numero;
     $this->saldo = $Saldo;
 }

 function set_titular($Titular){
     $this->titular = $Titular;
 }
 function get_titular(){
     return this->titular;
 }

 function set_numero($Numero){
    $this->numero = $Numero;
}
function get_numero(){
    return this->numero;
}

function set_saldo($Saldo){
    $this->saldo = $Saldo;
}
function get_saldo(){
    return this->saldo;
}

}
public function depositar($valor) {
    if ($valor > 0) {
        $this->saldo += $valor;
        echo "Depósito de $valor realizado com sucesso. Novo saldo: $this->saldo" . PHP_EOL;
    } else {
        echo "Valor de depósito inválido." . PHP_EOL;
    }
}

public function sacar($valor) {
    if ($valor > 0) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de $valor realizado com sucesso. Novo saldo: $this->saldo" . PHP_EOL;
        } else {
            echo "Tà sem um puto no bolso ladrão." . PHP_EOL;
        }
    } else {
        echo "Valor de saque inválido." . PHP_EOL;
    }
}


}

// Finge que ta funcionando
$minhaConta = new ContaBancaria("João", "12345");
$minhaConta->depositar(1000);
$minhaConta->sacar(500);
$minhaConta->sacar(700); //descobria a função que quebra linha
echo "Saldo atual: " . $minhaConta->getSaldo() . PHP_EOL;
?>