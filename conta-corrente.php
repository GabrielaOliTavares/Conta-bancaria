<?php
// Importo o script conta-bancaria.php
require_once("conta-bancaria.php");

// Classe Conta Corrente que é uma extensão de Conta Bancária
class ContaCorrente extends ContaBancaria {
// Atributo
private $classe = "silver";
// Muda o atributo classe para Silver
public function mudar_classe_para_silver() {
$this->classe = "silver";
}
// Muda o atributo classe para Gold
public function mudar_classe_para_gold() {
$this->classe = "gold";
}
// Muda o atributo classe para Black
public function mudar_classe_para_black() {
$this->classe = "black";
}
// Retorna a classe da conta corrente
public function get_classe() {
return $this->classe;
}
}
?>