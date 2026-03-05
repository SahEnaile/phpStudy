<?php

// neste arquivo eu vou estudar sobre codificações e decodificações de json

//json decode = decodifca uma string json

$json = '{"nome": "João", "idade": 30}';

// para ser um array associativo, passe 'true' no segundo parâmetro
$dados = json_decode($json, true);

print_r($dados);

// json encode = codifica um array ou objeto em uma string json

$dadosdois = json_encode($dados); // retorna uma string contendo a representação json do array ou objeto passado como parametros



