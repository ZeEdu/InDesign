<?php
$kmh = isset($_GET["kmh"]) ? $_GET["kmh"] : "";

if(is_numeric($kmh)) {
    if($kmh < 100) {
        echo "Você está no limite";
    } else {
        $multa = $kmh <= 120 ? "R$ 100,00" : ($kmh <= 180 ? "R$ 300,00" : "R$ 1.300,00");
        echo "Você ultrapassou o limite de velocidade e recebeu uma multa de ".$multa;
    }
} else {
    echo "Parametros GET invalidos";
}
