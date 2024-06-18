<?php

require_once "vendor/autoload.php";

use Diego\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode()


?>