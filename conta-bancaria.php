<?php
// Classe Conta Bancária
class ContaBancaria {
// Atributos
private $numero_conta = 0;
private $nome_titular = "";
protected $saldo = 0.00;
// Método Construtor
public function __construct($numero_conta, $nome_titular) {
$this->numero_conta = $numero_conta;
$this->nome_titular = $nome_titular;
}
// Método Depositar
// $valor é a quantidade que será depositada
public function depositar($valor) {
// Se valor for negativo, retorno uma mensagem de erro
if ($valor < 0.0) {
return "Não é possível informar um valor negativo!";
}
// Se valor for positivo, efetuo o depósito
$this->saldo += $valor;
return "Depósito efetuado com sucesso!";
}
// Método Sacar
// $valor é a quantidade que será sacada
public function sacar($valor) {

// Se valor for negativo, retorno uma mensagem de erro
if ($valor < 0.0) {
return "Não é possível informar um valor negativo!";
// Se saldo - valor for negativo, retorno uma mensagem de erro
} else if ($this->saldo - $valor < 0.00) {
return "Não foi possível realizar o saque, saldo insuficiente!";
}
// Se tudo estiver ok, efetuo saque
$this->saldo -= $valor;
return "Saque efetuado com sucesso!";
}
// Retorna o número da conta
public function get_numero_conta() {
return $this->numero_conta;
}
// Retorna o nome do titular da conta
public function get_nome_titular() {
return $this->nome_titular;
}
// Retorna o saldo da conta
public function get_saldo() {
return $this->saldo;
}
}
?>
