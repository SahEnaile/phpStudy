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
var_dump($notasParaoFilme);

$filme = [
"nome" => "thor",
"ano" => 2025,
"nota" => 7.8,
"genero" => "animacao"
];

echo $filme['ano']; // vai printar o que foi mapeado para a chave ano


//manipulação de arrays