<?php
require "conta.php";
require "cliente.php";

$conta = new Conta("020","mano1","053");
$cliente = new Cliente("021","mano2","097.345.278-89","michaeljackson@gmail.com",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCode();