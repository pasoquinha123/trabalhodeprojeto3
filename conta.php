<?php

class Conta{
    private string $code;
    private string $nome;
    private string $agencia;

    public function __construct(string $c,string $n,string $a){
        $this->definirCode($c);
        $this->definirNome($n);
        $this->definirAgencia($a);
    }

    public function definirCode(string $c){
        $this->Code = $c;
    }
    public function definirNome(string $n){
        $this->Nome = $n;
    }
    public function definirAgencia(string $a){
        $this->Agencia = $a;
    }

    public function exibirCode(){
        return $this->Code;
    }
    public function exibirNome(){
        return $this->Nome;
    }
    public function exibirAgencia(){
        return $this->Agencia;
    }

}