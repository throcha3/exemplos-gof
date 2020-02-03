<?php

abstract class Boleto {
	//private $codBanco;
    public final function geraBoleto() {
        var_dump('Gerando Boleto..<br />') ;
        $this->geraCodigoBarras();
        $this->geraNossoNumero();        
    }

    abstract function geraCodigoBarras();
    abstract function geraNossoNumero();
}

class BoletoBradesco extends Boleto {

    function geraCodigoBarras(){
        echo 'CB Brasdesco <br />';
    }
    function geraNossoNumero(){
        echo 'NN Brasdesco <br />';
    }
}

class BoletoSantander extends Boleto {

    function geraCodigoBarras(){
        echo 'CB Santander <br />';
    }
    function geraNossoNumero(){
        echo 'NN Santander <br />';
    }
}

$bolBrad = new BoletoBradesco();
$bolBrad->geraBoleto();

$bolSant = new BoletoSantander();
$bolSant->geraBoleto();