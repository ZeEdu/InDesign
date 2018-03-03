<?php
$anoAtual = isset($_GET["anoAtual"]) ? $_GET["anoAtual"] : "";
$ano = isset($_GET["ano"]) ? $_GET["ano"] : "";

if (is_numeric($ano) && is_numeric($anoAtual)) {
    $idade = $anoAtual - $ano;
    $maiorMenor = $idade >= 18 ? "maior" : "menor";
    echo "Em " . $ano . " a sua idade era " . $idade . ",<br> E nesse momemento você ja é $maiorMenor de idade";
} else {
    echo "Parametros GET invalidos";
}
