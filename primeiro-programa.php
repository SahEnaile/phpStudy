<?php

echo " Hello word !";

$NomeFilme = "Top Gun, Maverick\n"; 
$NomeFilme = "Thor\n"; // <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
$NomeFilme = "Se beber não case\n"; // <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
// <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
// \t é tabulaçao
$anoLançamento = $argv[1] ?? 2022;// argvs guarda valores do usuario, ?? verifca se o valor existe, senão existe printa 2022
$notaFilme =  375/5;
$IncluidonoPlano = true;

echo $notaFilme;
echo $notas = [];


echo "Nome do Filme" .$NomeFilme. "\n Ano Lançamento" .$anoLançamento; // Interpolação usa-se sempre aspas duplas

$quantidadedeNotas = $argc - 1;
$SomadeNotas = 0;

//loopings
    for ($contador = 1; $contador < $argc; $contador ++) {
        $notas[] = (float) $argv[$contador];
        }

  foreach($notas as $nota) {
    $SomadeNotas += $nota[$i];
  }      
    $contador = 1;   
    while ($argv[$contador] != 0) {
        $SomadeNotas += $argv[$contador++];
    } //argv é uma variavel especial quando o codigo roda no CLI e ele é usado para guardar valor e contar
// if, elseif e else

if ($anoLançamento >= 2022) {
    echo "esse filme é um lançamento";
} elseif($anoLançamento > 2020 && $anoLançamento <= 2022) {
    echo "esse filme ainda é novo";
} else{
    echo "Esse filme não é um lançamento";
} // echo printa no terminal

//match espression
$genero = match($NomeFilme) {
    "Top Gun, Maverick" => "ação",
    "Thor"=> " Animação",
    "Se beber não case"=> "Comedia"
};

echo "Genero do filme é " .$genero;

//tipo de dado array

$notasParaoFilme = [7, 8, 9, 15,22, 32, 7.5];
var_dump($notasParaoFilme); // var_dump é usado para mostrar o tipo de dado e o valor da variavel, nesse caso ele vai mostrar que é um array e os valores dentro do array

$filme = [
"nome" => "thor",
"ano" => 2025,
"nota" => 7.8,
"genero" => "animacao"
];

echo $filme['ano']; // vai printar o que foi mapeado para a chave ano


//manipulação de arrays
// para verificar se todos os elementos de um array satisfazem uma condição podemos usar a função array_all()

$exemploArray = [1, 2, 3, 4, 5];

$verifica = array_all($exemploArray, fn($elemento) => $elemento > 0);// array_all recebe um array e uma função de callback, a função de callback é usada para verificar se cada elemento do array satisfaz a condição, nesse caso a condição é se o elemento é maior que 0

echo 'array com elementos maior que 0'.($verifica ? 'Sim' : 'Não'); // operador ternário, ele é usado para verificar se a condição é verdadeira ou falsa, nesse caso ele vai verificar se a variavel $verifica é verdadeira ou falsa, se for verdadeira ele vai printar Sim, se for falsa ele vai printar Não

// array_any verifica se pelo menos um elemento do array satisfaz a condição
$verificaany = array_any($exemploArray, fn($elemento) => $elemento > 4); // array_any recebe um array e uma função de callback, a função de callback é usada para verificar se pelo menos um elemento do array satisfaz a condição, nesse caso a condição é se o elemento é maior que 4
echo 'array com elementos maior que 4' .($verificaany ? 'Sim' : 'Não'); // operador ternário, ele é usado para verificar se a condição é verdadeira ou falsa, nesse caso ele vai verificar se a variavel $verificaany é verdadeira ou falsa, se for verdadeira ele vai printar Sim, se for falsa ele vai printar Não
// ela só imprime se um é verdadeiro ou falso ou te da o valor booleano para vc manipular mas não da para guardar ela, pq o php esquece que ela existe,
// para guaradar o valor booleano para manipular depois, vc tem que usar a função array_filter, ela recebe um array e uma função de callback, a função de callback é usada para verificar se cada elemento do array satisfaz a condição, nesse caso a condição é se o elemento é maior que 4, e ela vai retornar um array com os elementos que satisfazem a condição
$arrayfiltrado = array_filter($exemploArray, fn($elemento) => $elemento > 4); // array_filter recebe um array e uma função de callback, a função de

// array_chunk divide um array em pedaços menores
$arrayTeste = array_chunk($exemploArray,2); // array_chunk recebe um array e o tamanho do pedaço, nesse caso ele vai dividir o array $exemploArray em pedaços de 2 elementos
print_r($arrayTeste); // print_r é usado para mostrar o valor da variavel,

$exemplodearray2 = [
    ['id' => 1, 'nome' => 'João'],
    ['id' => 2, 'nome' => 'Maria'],
    ['id' => 3, 'nome' => 'José'],
    ['id' => 4, 'nome' => 'ana']
];

$justName = array_column($exemplodearray2, 'nome'); // array_column recebe um array e o nome da coluna, nesse caso ele vai retornar um array com os valores da coluna 'nome'
print_r($justName); // print_r é usado para mostrar o valor da variavel,

//array_combine combina dois arrays, um com as chaves e outro com os valores
$keys = ['id', 'nome'];
$values = [1, 'João'];
$combined = array_combine($keys, $values); // array_combine recebe dois arrays, um com as chaves e outro com os valores, nesse caso ele vai combinar os arrays $

//array_count_values conta a quantidade de vezes que um valor aparece em um array
$arrayContagem = ['maçã', 'banana', 'maçã', 'laranja', 'banana', 'maçã'];
$contagem = array_count_values($arrayContagem); // array_count_values recebe um array e conta a quantidade de vezes que cada valor aparece no array, nesse caso ele vai contar a quantidade de vezes que cada fruta aparece no array $arrayContagem
print_r($contagem); // print_r é usado para mostrar o valor da variavel

//array_find Reotrna o primeiro valorque retorna o elemento que satisfaz a condição
$arrayfind = ['sarah', 'joao', 'jhessica'];
$arrayfind = array_filter($arrayfind, fn($array) => in_array($array[0], $arrayfind)); // array_filter recebe um array e uma função de callback, a função de callback é usada para verificar se cada elemento do array satisfaz a condição, nesse caso a condição é se o primeiro elemento do array está presente no array $arrayfind, e ela vai retornar um array com os elementos que satisfazem a condição
print_r($arrayfind); // print_r é usado para mostrar o valor da variavel
