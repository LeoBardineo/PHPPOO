<?php

class ContaBanco{
    // Atributos
    public $numConta;
    protected $tipo; // cc conta corrente, cp conta poupança
    private $dono;
    private $saldo;
    private $status;

    // Construtor
    public function __construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
        echo 'Conta criada com sucesso! <br>';
    }

    // Métodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == 'cc'){
            $this->setSaldo(50);
        }else{
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo 'Você ainda tem saldo na conta, logo não poderá fechar a conta. <br>';
        }else if($this->getSaldo() < 0){
            echo 'Você está no débito, logo não poderá fechar a conta. <br>';
        }else{
            $this->setStatus(false);
            echo 'Conta de '.$this->getDono().' fechada com sucesso. <br>';
        }
    }

    public function depositar($dinheiro){
        if($this->getStatus()){
            $novoSaldo = $this->getSaldo() + $dinheiro;
            $this->setSaldo($novoSaldo);
            echo $this->getDono()." realizou um depósito de $dinheiro reais. <br>";
        }else{
            echo 'Sua conta está fechada, logo não poderá realizar o depósito. <br>';
        }
    }

    public function sacar($dinheiro){
        if($this->getStatus()){
            $novoSaldo = $this->getSaldo() - $dinheiro;
            if($novoSaldo < 0){
                echo 'O dinheiro a ser sacado é maior do que o saldo contido em sua conta, logo o saque não foi realizado. <br>';
            }else{
                $this->setSaldo($novoSaldo);
                echo $this->getDono()." realizou um saque de $dinheiro reais. <br>";
            }
        }else{
            echo 'Sua conta está fechada, logo não poderá realizar o saque. <br>';
        }
    }

    public function pagarMensal(){
        // -12 cc, -20 cp
        if($this->getStatus()){
            if($this->getTipo() == 'cc'){
                if($this->getSaldo() > 12){
                    $novoSaldo = $this->getSaldo() - 12;
                    $this->setSaldo($novoSaldo);
                    echo $this->getDono()." realizou o pagamento mensal de 12 reais. <br>";
                }else{
                    echo 'Saldo insuficiente. <br>';
                }
            }else{
                if($this->getSaldo() > 20){
                    $novoSaldo = $this->getSaldo() - 20;
                    $this->setSaldo($novoSaldo);
                    echo $this->getDono()." realizou o pagamento mensal de 20 reais. <br>";
                }else{
                    echo 'Saldo insuficiente. <br>';
                }
            }
        }else{
            echo 'Sua conta está fechada, logo não poderá realizar o pagamento mensal. <br>';
        }
    }
    

    // GETTERS e SETTERS
    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($nC){
        $this->numConta = $nC;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($s){
        $this->status = $s;
    }
}
?>