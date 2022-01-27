<?php
    class Cliente {

        public $nConta;
        public $tConta;
        public $nRegistro;
        public $saldo;
        public $limite;
        

        //definindo metodo com passagem de parametros
        function setCliente($nConta,$tConta,$nRegistro,$saldo,$limite){
            $this->nConta = $nConta;
            $this->tConta = $tConta;
            $this->nRegistro = $nRegistro;
            $this->saldo = $saldo ;
            $this->limite = $limite ;
            

        }

        function depositar($valor){
            $this->saldo = $this->saldo + $valor;
        }

        function sacar($valor){
            if ($valor<=$this->saldo ) {
                $this->saldo = $this->saldo - $valor;
                
                
                

            }else if ($valor<=$this->saldo + $this->limite) {

                $this->limite = $this->saldo + $this->limite - $valor;

                $this->saldo = $this->saldo - $valor;

            }else{
                echo "Estourou o limite possivel de saque";
                echo "<hr>";
            }
            
        }

        function transferir(){

        }

        function exibirSaldo(){

            echo "Seu saldo é {$saldo}";
        }

        function exibirDadosCliente(){
            echo "Número da Conta é {$this->nConta} <br>";
            echo "Tipo da Conta é {$this->tConta} <br>";
            echo "Número do Registro é : {$this->nRegistro} <br>";
            echo "Seu Saldo é : {$this->saldo} <br>";
            echo "Seu Limite é de : {$this->limite}<br>";
            echo "<hr>";
        }
    }