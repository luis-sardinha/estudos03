<?php

class ContaBanco {

    public $numConta;
    protected $tipoConta;
    private $donoConta;
    private $saldoConta;
    private $statusConta;

    //metodos

    public function abrirConta($t){
        $this->setTipoConta($t);
        $this->setStatusConta(true);
        if($t == "CC") {
            $this->setSaldoConta(50);
        }elseif ($t == "CP"){
            $this->saldoConta = 150;
        }
    }

    public function fecharConta() {
        if ($this->getSaldoConta() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fecha-la.</p>";

        }elseif ($this->getSaldoConta() < 0) {
            echo "<p>Conta está em débito. impossível encerrar.</p>";

        }else {
            $this->setStatusConta (false);
        }

    }

    public function depositar($v) {
        if ($this->getStatusConta()) {
            $this->setSaldoConta ($this->getSaldoConta() + $v);
            echo "<p>Desposito de R$ $v na conta de " .$this->getDonoConta() ."</p>";

        } else {
            echo "<p>Conta fechada. não consigo depositar</p>";
        }

    }
    public function sacar($v) {
        if($this->getStatusConta()) {
            if ($this->getSaldoConta() > $v) {
                $this->setSaldoConta($this->getSaldoConta() - $v);  
                echo "<p>Saque de R$ $v autorizado na conta da," .$this->getDonoConta()."</p>";
            } else {
                echo "saldo insuficiente para saque.";
            }
                
        } else {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }

    }

    public function pagarMensal() {
        if ($this->getTipoConta() == "CC") {
            $v = 12;
        } else if ($this->getTipoConta() == "CP") {
            $v = 20;
        }
        if ($this->getStatusConta()) {
            $this->setSaldoConta($this->getSaldoConta() - $v);
        } else {
            echo "<p>Problemas com a conta</p>";
        }
    }
   
    public function __construct() {
        $this->setSaldoConta(0);
        $this->setStatusConta(false);
        echo "<p>Conta criada com sucesso</p>";
    }

       
    public function getNumConta()
    {
        return $this->numConta;
    }

  
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

   
    public function getTipoConta()
    {
        return $this->tipoConta;
    }

   
    public function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;

        return $this;
    }

   
    public function getDonoConta()
    {
        return $this->donoConta;
    }

   
    public function setDonoConta($donoConta)
    {
        $this->donoConta = $donoConta;

        return $this;
    }

  
    public function getSaldoConta()
    {
        return $this->saldoConta;
    }

   
    public function setSaldoConta($saldoConta)
    {
        $this->saldoConta = $saldoConta;

        return $this;
    }

  
    public function getStatusConta()
    {
        return $this->statusConta;
    }

  
    public function setStatusConta($statusConta)
    {
        $this->statusConta = $statusConta;

        return $this;
    }
}




?>