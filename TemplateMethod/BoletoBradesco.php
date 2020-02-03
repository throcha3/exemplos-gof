<?php
namespace TemplateMethod;
include_once('Boleto.php');

class BoletoBradesco extends Boleto {

    function geraCodigoBarras(){
        echo 'CB Brasdesco <br />';
    }
    function geraNossoNumero(){
        echo 'NN Brasdesco <br />';
    }
}
