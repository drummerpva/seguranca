<?php
require '../app/config.php';
require '../app/classes/Carro.php';

echo "Meu Carro: ".$carro."<br>";
$carro = new Carro();
$carro->andar();