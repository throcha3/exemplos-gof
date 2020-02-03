<?php
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 09/04/2018
 * Time: 16:47
 */

namespace FactoryMethod;
include_once ('CarroLuxo.php');
include_once ('CarroPopular.php');

class CarroFactory
{
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