<?php 

require_once "vendor/autoload.php";

use Alvaro220592\ComposerCep\Search;

$busca = new Search;

$resultado = $busca->getAddress('06720120');

print_r($resultado);

?>