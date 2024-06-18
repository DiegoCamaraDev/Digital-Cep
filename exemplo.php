<?php

require_once "vendor/autoload.php";

use Diego\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('59073070');

print_r($resultado);


?>