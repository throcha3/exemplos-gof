<?php
namespace FactoryMethod;

include_once('CarroFactory.php');

$factory = new CarroFactory();

var_dump($factory);
echo '<br />';
$factory = $factory->construa('luxo');

var_dump($factory);
echo '<br />';

$factory = new CarroFactory();
$factory = $factory->construa('popular');
echo '<br />';
var_dump($factory);