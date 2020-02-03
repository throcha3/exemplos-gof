<?php
namespace TemplateMethod;

abstract class Boleto {

    public final function geraBoleto() {
        echo 'Gerando Boleto..<br />';
        $this->geraCodigoBarras();
        $this->geraNossoNumero();
        echo 'fim';
    }

    abstract function geraCodigoBarras();
    abstract function geraNossoNumero();
}
