<?php

// neste arquivo eu vou estudar sobre codificações e decodificações de json

//json decode = decodifca uma string json

$json = '{"nome": "João", "idade": 30}';

// para ser um array associativo, passe 'true' no segundo parâmetro
$dados = json_decode($json, true);

print_r($dados);

// json encode = codifica um array ou objeto em uma string json

$dadosdois = json_encode($dados); // retorna uma string contendo a representação json do array ou objeto passado como parametros

$json = '{"ba": "baab", "abbab"}';

$dadosdois = json_last_error($dadosdois); // json_last_error retorna o código do último erro ocorrido durante a codificação ou decodificação de json, nesse caso ele vai retornar 0 se não houver erros, ou um código de erro se houver erros

print_r($dadosdois);

// json_last_error_msg retorna uma string com a mensagem do último erro ocorrido durante a codificação ou decodificação de json, nesse caso ele vai retornar uma string vazia se não houver erros, ou uma mensagem de erro se houver erros
$dadostres = json_last_error_msg(); // json_last_error_msg retorna uma string com a mensagem do último erro ocorrido durante a codificação ou decodificação de json, nesse caso ele vai retornar uma string vazia se não houver erros, ou uma mensagem de erro se houver erros
print_r($dadostres);

$dadosquatro = json_validate($dados, JSON_PRETTY_PRINT); // json_validate é uma função que valida se uma string é um json válido, ela recebe uma string e um conjunto de opções, nesse caso ela vai validar se a string $dados é um json válido, e se for válida ela vai retornar a string formatada com a opção JSON_PRETTY_PRINT, que é usada para formatar a string json de forma legível, com quebras de linha e indentação, caso contrário ela vai retornar false
print_r($dadosquatro);
