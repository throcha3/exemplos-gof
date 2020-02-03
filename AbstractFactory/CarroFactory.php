<?php
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 09/04/2018
 * Time: 16:47
 */

namespace AbstractFactory;
include_once ('CarroLuxo.php');
include_once ('CarroPopular.php');
include_once ('Direcao.php');
include_once ('Cambio.php');

class CarroFactory
{
    public abstract Direcao montarDirecao();
    public abstract Cambio montarcambio();


    public function construa($tipo = ''){
        switch ($tipo){
            case "luxo":
                return new CarroLuxo();
                break;
            case "popular":
                return new CarroPopular();
                break;
            default :
                echo 'deu errado';
                break;
        }
    }

}