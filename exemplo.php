<?php
require_once('vendor/autoload.php');

use Isaque\DigitalCep\Search;

$busca      = new Search();

$resultado  = $busca->getAddressFromZipCode('16300460');

print_r($resultado);
?>