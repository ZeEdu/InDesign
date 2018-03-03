<?php
/*
O glorioso exército de Togo iniciou um programa de alistamento compulsório para 
suas gloriosas forças armadas, para ser alistado o indivíduo precisa preencher 
os requisitos abaixo:
 * 
Ser maior de 21 anos e menor do que 35
Ter irmãos
Não possuir doenças crônicas
Não ter ficha criminal
Não ter filhos
Pesar menos de 100kg e mais de 50kg

O indivíduo pode ser alistado na marinha, aeronáutica, exército seguindo o seguinte critério:
Marinha: Ter entre 21 e 24 anos, 1 irmão e peso entre 90 e 100kg.
Aeronautica: Ter entre 25 e 29 anos, 2 irmãos e peso entre 89 e 70kg.
Exército: Ter entre 30 e 35 anos, 3 ou mais irmãos e peso entre 69 e 50kg;.
*/

extract($_GET);
header("Content-type: text/html; charset=utf-8");

if(isset($ano) && isset($irmaos) && isset($peso) && isset($temDoencaCronica) 
        && isset($fichaCriminal) && isset($temFilhos)) {
    $idade = date("Y") - $ano;
    if($idade >= 21 && $idade <= 35 && $irmaos > 0 && $temDoencaCronica == 0 && $fichaCriminal == 0 
            && $temFilhos == 0 && $peso >= 50 && $peso <= 100) {
        if($idade >= 21 && $idade <= 24 && $irmaos == 1 && $peso >= 90 && $peso <= 100) {
            $msg = "e pode se alistar na Marinha";
        } elseif($idade >= 25 && $idade <= 29 && $irmaos == 2 && $peso >= 70 && $peso <= 89) {
            $msg = "e pode se alistar na aeronautica";
        } elseif($idade >= 30 && $idade <= 35 && $irmaos >= 3 && $peso >= 50 && $peso <= 69) {
            $msg = "e pode se alistar no exercito";
        } else {
            $msg = "mas não se encaixa nos perfis disponiveis";
        }
        echo "Você está apto, ".$msg;
    } else {
        echo "Você não está apto";
    }
} else {
    echo "Parametros GET invalidos ou faltando";
}
