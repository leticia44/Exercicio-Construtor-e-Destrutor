<?php
    class Conta{

        public $Cliente;
        public $Agencia;
        public $Conta;
        public $Saldo;
        public $Status;

        //Método construtor (Propriedade)
        function __construct($Titular,$Agencia,$Conta,$Saldo,$Status){
            $this->Cliente = $Titular;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->Saldo = $Saldo;
            $this->Cancelada = $Status;
        }

        //Método Destrutor
        function __destruct(){
            echo"<br/><small>O Objeto foi destruido.</small>";
        }

        //Método Sacar() Diminui o saldo em quantidade
        function Sacar($quantia){
            if($quantia){
                $this->Saldo -= $quantia;
            }
        }

        //Método Depositar() Depositar uma quantia, acrecendo o saldo
        function Depositar($quantia){
            if( $quantia > 0){
                $this->Saldo += $quantia;
            }
        }

        //Método ObterSaldo() Retorna o saldo da conta
        function ObterSaldo(){
            return $this->Saldo;
        }
    }
?>
