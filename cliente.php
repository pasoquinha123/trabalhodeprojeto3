<?php
class Cliente{
    private string $codigo;
    private string $nome;
    private string $cpf;
    private string $email;
    private Conta $conta;

    public function __construct($codigo,$nome,$cpf,$email,$conta){
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirCpf($cpf);
        $this->definirEmail($email);
        $this->definirConta($conta);
    }

    public function definirCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirCpf(string $cpf){
        $this->cpf = $cpf;
    }

    public function definirEmail(string $email){
        $this->email = $email;
    }

    public function definirConta(Conta $conta){
        $this->conta = $conta;
    }


    public function exibirCodigo(){
        return $this->codigo;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirCpf(){
        return $this->cpf;
    }

    public function exibirEmail(){
        return $this->email;
    }

    public function exibirConta(){
        return $this->conta;
    }
}
?>